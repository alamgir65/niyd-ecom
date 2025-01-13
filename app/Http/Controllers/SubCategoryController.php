<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        return view('admin.subcategory.index',['subcategories'=>Subcategory::all()]);
    }
    public function create(){
        return view('admin.subcategory.create',['categories'=>Category::all()]);
    }
    public function store(Request $request){
        Subcategory::newSubCategory($request);
        return back()->with('message','New sub Category added successfully');
    }
    public function edit($id){
        return view('admin.subcategory.edit',['subcategory'=>Subcategory::find($id),'categories'=>Category::all()]);
    }
    public function update(Request $request,$id){
        Subcategory::updateSubCategory($request,$id);
        return redirect('/subcategory/index')->with('message'.'Sub Category updated successfully');
    }
    public function delete($id){
        Subcategory::deleteSubCategory($id);
        return back()->with('message','Sub-category added successfully');
    }
}
