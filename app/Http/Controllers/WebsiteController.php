<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public $products;
    public function index(){
//        return Product::latest()->take(3)->get();
        return view('website.home.index',[
            'categories' => Category::all(),
            'new_products_left' => Product::latest()->take(2)->get(), // Product::orderBy('id','desc')->get();
            'new_product_mid' => Product::latest()->skip(3)->first(),
            'new_products_right' => Product::latest()->skip(4)->take(2)->get(),
            'home_category_one' => Category::where('home_status',1)->orderBy('id','asc')->first(),
            'home_category_two' => Category::where('home_status',1)->orderBy('id','asc')->skip(1)->first(),
        ]);
    }
    public function category($id){
        if($id == -1){
            $this->products = Product::all();
        }
        else{
            $this->products = Product::where('category_id',$id)->latest()->get();
        }
        return view('website.category.index',['products' => $this->products]);
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

