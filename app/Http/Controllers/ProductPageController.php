<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Product;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductPageController extends Controller
{

    function index() {
        $products = Product::all();
        $products->map(function ($product) {
            if(strlen($product->description) > 100) {
                $product->description = mb_substr($product->description , 0, 100)."...";
            }
            return $product;
          });
          $product_in_history = $this->get_histoty();
        return view('index', compact('products','product_in_history'));
    }

    public function show_product(Request $request)//GET, not POST
    {
        $id = $request->id;
        $product = Product::find($id);
        $history_record = new History();
        $history_record->user_id = Auth::id();
        $history_record->product_id = $id;
        $history_record->save();
        $product_in_history = $this->get_histoty();
        return view('product',compact('product','product_in_history'));
    }
    function get_histoty(){
        $history = Auth::user()->history;
        $product_in_history = $history->map(function ($el){
            return $el->product;
        });
        $product_in_history = $product_in_history->sortByDesc('created_at')->unique('id');
        return $product_in_history;
    }
    public function show_sorted(Request $request)//GET
    {
        return $this->sort($request->sort_type,'price');
    }
    public function show_sorted_by_date(Request $request)//GET
    {
        return $this->sort($request->sort_type,'created_at');
    }
    function sort($sort_type,$type){
        $products = Product::orderBy($type, $sort_type)->get();
        $products->map(function ($product) {
            if(strlen($product->description) > 100) {
                $product->description = mb_substr($product->description , 0, 100)."...";
            }
            return $product;
          });
        $table_view = view('products_list',compact('products'))->render();
        return response()->json(['succes' => true, 'table_view' => $table_view]);
    }
    public function filter_data(Request $request){
        $data = $request->json()->all();
        $search_options = [];

        if($data['Καφές'])
            $search_options[] = "Coffee";
        if($data['Αξεσουάρ'])
            $search_options[] = "Accessories";
        if($data['Άλλα'])
            $search_options[] = "Other";
        
        
        if(count($search_options) === 0)
            $products = $products = Product::all();
        else
            $products = Product::whereIn('category', $search_options)->get();
        $products->map(function ($product) {
            if(strlen($product->description) > 100) {
                $product->description = mb_substr($product->description , 0, 100)."...";
            }
            return $product;
          });
        $table_view = view('products_list',compact('products'))->render();
        return response()->json(['succes' => true, 'table_view' => $table_view]);
    }

    public function filter_data_by_price(Request $request){
        $data = $request->json()->all();
        $from = $data['from'];
        $to = $data['to'];

        $products = Product::whereBetween('price',[$from,$to])->get();

        $products->map(function ($product) {
            if(strlen($product->description) > 100) {
                $product->description = mb_substr($product->description , 0, 100)."...";
            }
            return $product;
          });

        $table_view = view('products_list',compact('products'))->render();
        return response()->json(['succes' => true, 'table_view' => $table_view]);
    }
}
