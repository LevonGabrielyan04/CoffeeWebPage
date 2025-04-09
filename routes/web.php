<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostContoller;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\is_admin;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductPageController::class, 'index'])->name('user_index');
Route::get('/show_sorted', [ProductPageController::class, 'show_sorted'])->name('show_sorted');
Route::get('/show_sorted_by_date', [ProductPageController::class, 'show_sorted_by_date'])->name('show_sorted_by_date');
Route::post('/filter_data_by_price', [ProductPageController::class, 'filter_data_by_price'])->name('filter_data_by_price');
Route::post('/filter_data', [ProductPageController::class, 'filter_data'])->name('filter_data');
Route::get('/get_categories',[CategoriesController::class, 'get_categories'])->name('get.categories');

Route::get('/dashboard', function () {
    //return view('dashboard');
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/product',[ProductPageController::class, 'show_product'])->name('product');
});

Route::middleware(is_admin::class)->group(function() {
    Route::get('/adminPanel',[AdminPageController::class, 'show_admin_panel'])->name('admin_panel');
    Route::post('/adminPanel',[PostContoller::class, 'store'])->name('store');
    Route::get('/index',[AdminPageController::class, 'index'])->name('index');
    Route::get('/show',[AdminPageController::class, 'show'])->name('show');
    Route::post('/show',[PostContoller::class, 'show'])->name('show.post');
    Route::post('/show_product',[PostContoller::class, 'show_product'])->name('show_product.post');
    Route::get('/show_product',[AdminPageController::class, 'show_product'])->name('show_product');
    Route::post('/store_category',[PostContoller::class, 'store_category'])->name('category.post');
    Route::get('/create_category',[AdminPageController::class,'create_category'])->name('create.category');
});


require __DIR__.'/auth.php';
