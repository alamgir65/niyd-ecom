<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
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
    public function store(Request $request){
        $id = Product::newProduct($request);
        OtherImage::newOtherImage($id,$request->file('other_image'));
        return back()->with('message','Product added successfully');
    }
    public function getSubCategoryByCategory(){
        $categoryId = $_GET['id'];
        $subCategories = Subcategory::where('category_id',$categoryId)->get();
//        return response($subCategories);
        return response()->json($subCategories);
    }
}
