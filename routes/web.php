<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Welcome Page Route
Route::get('/', function () {
    return view('welcome');
});

// Home Page Route
Route::get('home', [HomeController::class, 'home'])->name('home');

// Order Page Route 
Route::get('order', [OrderController::class, 'order'])->name('order');

// Login Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('loginaksi', [LoginController::class, 'loginaksi'])->name('loginaksi');

// Product Routes 
Route::middleware(['auth'])->group(function () {
    Route::get('product', [ProductController::class, 'index'])->name("product");
    Route::post('product', [ProductController::class, 'store'])->name("product.store");
    Route::get('product/create', [ProductController::class, 'create'])->name("product.create");
    Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name("product.edit");
    Route::post('product/{product}', [ProductController::class, 'update'])->name("product.update");
    Route::delete('product/{product}', [ProductController::class, 'destroy'])->name("product.destroy");

    // Logout Route
    Route::get('logoutaksi', [LoginController::class, 'logoutaksi'])->name('logoutaksi');
});
