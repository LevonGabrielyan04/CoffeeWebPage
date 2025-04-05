<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        $product->image = $request->file('image')->store('/product_images','public');
        
        $product->save();

        return view('admin.admin_panel');
    }
}
