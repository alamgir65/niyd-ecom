<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index');
    }
    public function create(){
        return view('admin.product.create',[
            'categories'=>Category::all(),
            'sub_categories'=> Subcategory::all(),
            'brands'=>Brand::all(),
            'units'=>Unit::all()
        ]);
    }
}
