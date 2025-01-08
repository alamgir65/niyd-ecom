<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::get('/about-us',[WebsiteController::class,'about'])->name('about');
Route::get('/product-category',[WebsiteController::class,'category'])->name('product-category');
Route::get('/product-details',[WebsiteController::class,'productDetails'])->name('product-details');

Route::get('/add-cart',[CartController::class,'index'])->name('cart.index');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');

Route::get('/customer/login-signup',[CustomerAuthController::class,'index'])->name('customer.login-register');

Route::get('/all-blogs',[BlogController::class,'index'])->name('blog.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class,'creates'])->name('category.create');

    Route::get('/add-subcategory',[SubCategoryController::class,'create'])->name('subcategory.create');
    Route::get('/manage-subcategory',[SubCategoryController::class,'index'])->name('subcategory.index');

    Route::get('/manage-brand',[BrandController::class,'index'])->name('brand.index');
    Route::get('/add-brand',[BrandController::class,'create'])->name('brand.create');

    Route::get('/manage-unit',[UnitController::class,'index'])->name('unit.index');
    Route::get('/add-unit',[UnitController::class,'create'])->name('unit.create');

    Route::get('/add-product',[ProductController::class,'create'])->name('product.create');
    Route::get('/manage-product',[ProductController::class,'index'])->name('product.index');
});


