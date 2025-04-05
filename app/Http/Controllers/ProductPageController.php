<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show_product()
    {
        return view('product');
    }
}
