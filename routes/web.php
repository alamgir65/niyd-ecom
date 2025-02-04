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
use App\Http\Controllers\AdminOrderController;
Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact');
Route::get('/about-us',[WebsiteController::class,'about'])->name('about');
Route::get('/product-category/{id}',[WebsiteController::class,'category'])->name('product-category');
Route::get('/product-details/{id}',[WebsiteController::class,'productDetails'])->name('product-details');

Route::get('/cart/index',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/add/{id}',[CartController::class,'addToCart'])->name('cart.add');
Route::get('/cart/direct-add/{id}',[CartController::class,'directAddToCart'])->name('cart.direct-add-to-cart');
Route::get('/cart/remove/{rowId}',[CartController::class,'remove'])->name('cart.remove');
Route::post('/cart/update',[CartController::class,'update'])->name('cart.update');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');
Route::post('/checkout/new-customer',[CheckoutController::class,'newCustomer'])->name('checkout.new-customer');
Route::get('/checkout/billing-info',[CheckoutController::class,'billingInfo'])->name('checkout.billing-info');
Route::post('/checkout/customer-login',[CheckoutController::class,'customerLogin'])->name('checkout.customer-login');
Route::post('/checkout/new-order', [CheckoutController::class, 'newOrder'])->name('checkout.new-order');
Route::get('/checkout/complete-order',[CheckoutController::class,'completeOrder'])->name('checkout.complete-order');
Route::get('/customer/login-signup',[CustomerAuthController::class,'index'])->name('customer.login-register');
Route::get('/customer/logout',[CustomerAuthController::class,'logout'])->name('customer.logout');

Route::get('/all-blogs',[BlogController::class,'index'])->name('blog.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class,'creates'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'updateCategory'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'deleteCategory'])->name('category.delete');

    Route::get('/subcategory/create',[SubCategoryController::class,'create'])->name('subcategory.create');
    Route::get('/subcategory/index',[SubCategoryController::class,'index'])->name('subcategory.index');
    Route::post('/subcategory/store',[SubCategoryController::class,'store'])->name('subcategory.store');
    Route::get('/subcategory/edit/{id}',[SubCategoryController::class,'edit'])->name('subcategory.edit');
    Route::post('/subcategory/update/{id}',[SubCategoryController::class,'update'])->name('subcategory.update');
    Route::get('subcategory/delete/{id}',[SubCategoryController::class,'delete'])->name('subcategory.delete');

    Route::get('/manage-brand',[BrandController::class,'index'])->name('brand.index');
    Route::get('/add-brand',[BrandController::class,'create'])->name('brand.create');
    Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
    Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');

    Route::get('/unit/index',[UnitController::class,'index'])->name('unit.index');
    Route::get('/add-unit',[UnitController::class,'create'])->name('unit.create');
    Route::post('/unit/store',[UnitController::class,'store'])->name('unit.store');
    Route::get('/unit/edit/{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}',[UnitController::class,'update'])->name('unit.update');
    Route::get('/unit/delete/{id}',[UnitController::class,'delete'])->name('unit.delete');

    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::get('/getSubCategoryByCategory',[ProductController::class,'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product/details/{id}',[ProductController::class,'detail'])->name('product.detail');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

    Route::get('/order/index',[AdminOrderController::class,'index'])->name('order.index');
    Route::get('/order/details/{id}',[AdminOrderController::class,'detail'])->name('order.detail');
    Route::get('/order/edit/{id}',[AdminOrderController::class,'edit'])->name('order.edit');
    Route::post('/order/update/{id}',[AdminOrderController::class,'update'])->name('order.update');
    Route::get('/order/delete/{id}',[AdminOrderController::class,'delete'])->name('order.delete');
});


