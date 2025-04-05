<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\PostContoller;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\is_admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

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
});


require __DIR__.'/auth.php';
