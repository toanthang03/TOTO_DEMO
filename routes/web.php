<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\NewController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Client\LocaleController;

Route::prefix('/')->group(function () {
    //View Trang chủ
    Route::get('', [HomeController::class, 'index'])->name('home');
    //View Login & Register
    //Get
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    //Post
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/register', [UserController::class, 'register'])->name('register');
});
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//View Product
Route::prefix('/')->group(function () {
    //View Brands
    Route::get('/brand', [ProductController::class, 'getBrandView'])->name('brands');
    //View Product
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    //View Product Detail
    Route::get('products/{id}', [ProductController::class, 'show'])->name('products.detail');
    //Thêm sản phẩm
    
});

//View NEWS
Route::prefix('/new')->group(function () {
    Route::get('', [NewController::class, 'index'])->name('news.index');
    Route::get('/{id}', [NewController::class, 'detail'])->name('news.detail');
});

Route::get('locale/{lang}',[LocaleController::class, 'setLocale'])->name('locale');

