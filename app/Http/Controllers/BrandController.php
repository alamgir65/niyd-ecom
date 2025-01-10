<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.index',['brands'=>Brand::all()]);
    }
    public function create(){
        return view('admin.brand.create');
    }
    public function store(Request $request){
        Brand::newBrand($request);
        return back()->with('message','Brand added successfully');
    }
    public function edit($id){
        return view('admin.brand.edit',['brand'=>Brand::find($id)]);
    }
    public function update(Request $request,$id){
        Brand::updateBrand($request,$id);
        return redirect('/manage-brand')->with('message','Brand Info updated successfully');
    }
    public function delete($id){
        Brand::deleteBrand($id);
        return back()->with('message','Brand Deleted successfully');
    }
}
