<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostContoller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'altitude' => 'required|numeric',
            'processing' => 'required|string|max:255',
            'variety' => 'required|string|max:255',
            'baking' => 'required|string|max:255',
            'grinding' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->altitude = $request->altitude;
        $product->processing = $request->processing;
        $product->variety = $request->variety;
        $product->baking = $request->baking;
        $product->grinding = $request->grinding;
        $product->image = $request->file('image')->store('product_images','public');
        
        if( $product->save() ){
            return redirect()->back()->with('success', 'product created');
        }
        return redirect()->back()->with('fail', 'incorect input');
    }
    public function show(Request $request){
        $request->validate([
            'input' => 'required'//name, email or id
        ]);
        if( is_numeric($request->input) ){
            $user = User::find($request->input);
        }elseif(filter_var($request->input, FILTER_VALIDATE_EMAIL)){
            $user = User::where('email', '=',$request->input)->firstOrFail();
        }
        elseif(ctype_alpha(str_replace(' ', '', $request->input))){
            $user = User::where('name','LIKE','%'.$request->input.'%')->get();
        }
        else{
            return redirect()->back()->with('fail', 'Please input name eg."Levon Gabrielyan",email, or Id number');
        }
        return view('admin.see_one_user',compact('user'));
    }

    public function show_product(Request $request){
        $request->validate([
            'input' => 'required'
        ]);
        if( is_numeric($request->input) ){
            $product = Product::where('id','=',$request->input)->get();
        }
        elseif(ctype_alpha(str_replace(' ', '', $request->input))){
            $product = Product::where('name','LIKE','%'.$request->input.'%')->get();
        }
        else{
            return redirect()->back()->with('fail', 'Please input name eg."Arabica" or Id number');
        }
        $product->map(function ($product) {
            if(strlen($product->description) > 100) {
                $product->description = mb_substr($product->description , 0, 100)."...";
            }
            return $product;
          });
        return view('admin.see_one_product',compact('product'));
    }
}
