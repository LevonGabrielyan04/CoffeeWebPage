<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPageController extends Controller//index(sax),show(1hat),create(get zapros formy stanalu hamar),store(post zapros formy pahelu hamar)
{
    public function show_admin_panel()//a.k.a. create()
    {
        return view('admin.admin_panel');
    }
    public function index(){
        $users = User::get();

        return view('admin.see_all_users',compact('users'));
    }

    public function show(){
        return view('admin.see_one_user');
    }

    public function show_product(){
        return view('admin.see_one_product');
    }
}
 