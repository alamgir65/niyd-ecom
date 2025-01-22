<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
//        return Product::latest()->take(3)->get();
        return view('website.home.index',[
            'categories' => Category::all(),
            'new_products_left' => Product::latest()->take(2)->get(), // Product::orderBy('id','desc')->get();
            'new_product_mid' => Product::latest()->skip(2)->first(),
            'new_products_right' => Product::latest()->skip(3)->take(2)->get(),
            'home_category_one' => Category::where('home_status',1)->orderBy('id','asc')->first(),
            'home_category_two' => Category::where('home_status',1)->orderBy('id','asc')->skip(1)->first(),
        ]);
    }
    public function category($id){
        return view('website.category.index',['products' => Product::where('category_id',$id)->latest()->get()]);
    }
    public function productDetails($id){
        return view('website.product.detail',['product' => Product::find($id)]);
    }
    public function contact(){
        return view('website.home.contact');
    }
    public function about(){
        return view('website.home.about');
    }

}

