<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        return view('admin.unit.index',['units'=>Unit::all()]);
    }
    public function create(){
        return view('admin.unit.create');
    }
    public function store(Request $request){
        Unit::newUnit($request);
        return back()->with('message','Unit added Successfully');
    }
    public function edit($id){
        return view('admin.unit.edit',['unit'=>Unit::find($id)]);
    }
    public function update(Request $request,$id){
        Unit::updateUnit($request,$id);
        return redirect('/unit/index')->with('message','Unit Added successfully');
    }
    public function delete($id){
        Unit::deleteUnit($id);
        return back()->with('message','Unit Deleted successfully');
    }
}
