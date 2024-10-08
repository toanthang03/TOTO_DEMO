<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Client\NewController;

Route::prefix('/')->group(function () {
    Route::get('/homeadmin', [AdminHomeController::class, 'index'])->name('admin');
    //Product
    Route::get('/product',[AdminProductController::class, 'index'])->name('admin.products.show');

    //Thêm sản phẩm
    Route::get('/product/create', [AdminProductController::class, 'store'])->name('admin.products.store');
    Route::post('/product/create', [AdminProductController::class, 'store'])->name('admin.products.store');
    
    //Thêm thông tin sản phẩm
    Route::get('/product/{id}', [AdminProductController::class, 'updateInfor'])->name('admin.products.update');
    Route::post('/product/{id}', [AdminProductController::class, 'updateInfor'])->name('admin.products.update');

    //Chỉnh sửa sản phẩm
    Route::get('/product/{id}', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::post('/product/{id}', [AdminProductController::class, 'edit'])->name('admin.products.edit');

    //Xóa sản phẩm
    Route::get('/product/{id}/delete', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
});

//Thêm tin tức mới
Route::get('/addNew', [NewController::class, 'addNew'])->name('new.addNew');
Route::post('/addNew', [NewController::class, 'addNew'])->name('new.addNew');
