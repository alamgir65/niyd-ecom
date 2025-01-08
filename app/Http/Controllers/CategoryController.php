<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories,$category;
    public function index(){
        $this->categories = Category::all();
        return view('admin.category.index',['categories'=>$this->categories]);
    }
    public function creates(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        Category::newCategory($request);
        return back()->with('message','Category added successfully');
    }
    public function edit($id){
        $this->category = Category::find($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }
    public function updateCategory(Request $request,$id){
        Category::updateCategory($request,$id);
        return redirect('/category/index')->with('message','Category info updated successfully');
    }
    public function deleteCategory($id){
        Category::deleteCategory($id);
        return redirect('/category/index')->with('message','Category Deleted successfully');
    }
}
