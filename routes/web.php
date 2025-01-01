<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/product-category',[WebsiteController::class,'category'])->name('product-category');
Route::get('/product-details',[WebsiteController::class,'productDetails'])->name('product-details');

Route::get('/add-cart',[CartController::class,'index'])->name('cart.index');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');

Route::get('/customer/',[CustomerAuthController::class,'index'])->name('customer.login-register');
