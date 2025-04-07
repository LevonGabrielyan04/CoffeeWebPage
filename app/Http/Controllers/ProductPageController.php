<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show_product(Request $request)//GET, not POST
    {
        $id = $request->id;
        $product = Product::find($id);
        return view('product',compact('product'));
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
}
