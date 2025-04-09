<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function get_categories()
    {
        $categories = Category::all()->toJson();
        return $categories;
    }
}
