<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\http\Controllers\ReportController;


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/',                      [DashboardController::class, 'index'])->name('dashboard');

    // Route Users
    Route::get('user',                  [UserController::class, 'index'])->name('user');
    Route::get('user/create',           [UserController::class, 'create'])->name('user.create');
    Route::post('user/create',          [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{id}',        [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/edit/{id}',       [UserController::class, 'update'])->name('user.update');
    Route::get('user/delete/{id}',      [UserController::class, 'delete'])->name('user.delete');
    Route::get('user/logout',           [UserController::class, 'logout'])->name('logout');

    //category
    Route::get('category',              [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create',       [CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store',       [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/edit/{id}',    [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category/edit/{id}',   [CategoryController::class, 'update'])->name('category.update');
    Route::get('category/delete/{id}',  [CategoryController::class, 'delete'])->name('category.delete');

    //Product
    Route::get('product',               [ProductController::class, 'index'])->name('product');
    Route::get('product/create',        [ProductController::class, 'create'])->name('product.create');
    Route::post('product/create',       [ProductController::class, 'store'])->name('product.store');
    Route::get('product/edit/{id}',     [ProductController::class, 'edit'])->name('product.edit');
    Route::post('product/update/{id}',  [ProductController::class, 'update'])->name('product.update');
    Route::get('product/delete/{id}',   [ProductController::class, 'delete'])->name('product.delete');

    // Order
    Route::get('order',                 [OrderController::class, 'index'])->name('order');
    Route::get('order_submit/{id}',     [OrderController::class, 'order_submit'])->name('order_submit');
    Route::get('list_orders',           [OrderController::class, 'order_listing'])->name('order.listing');

    // Report
    // Route::get('report',                [ReportController::class, 'index'])->name('report');
    Route::get('report', 'ReportController@index')->name('report');
});

