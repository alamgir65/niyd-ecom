<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'categories' => Category::all()
        ]);
    }
    public function category(){
        return view('website.category.index');
    }
    public function productDetails(){
        return view('website.product.detail');
    }
    public function contact(){
        return view('website.home.contact');
    }
    public function about(){
        return view('website.home.about');
    }

}

