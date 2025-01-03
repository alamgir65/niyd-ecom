<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::get('/about-us',[WebsiteController::class,'about'])->name('about');
Route::get('/product-category',[WebsiteController::class,'category'])->name('product-category');
Route::get('/product-details',[WebsiteController::class,'productDetails'])->name('product-details');

Route::get('/add-cart',[CartController::class,'index'])->name('cart.index');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');

Route::get('/customer/login-signup',[CustomerAuthController::class,'index'])->name('customer.login-register');

Route::get('/all-blogs',[BlogController::class,'index'])->name('blog.index');

Route::get('/product',[ProductController::class,'index'])->name('product.index');
