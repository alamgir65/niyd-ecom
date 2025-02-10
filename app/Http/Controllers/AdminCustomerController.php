<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index(){
        return view('admin.customer.index',['customers' => Customer::latest()->get()]);
    }
    public function create(){
        return view('admin.customer.create');
    }
    public function details($id){
        return view('admin.customer.detail',['customer' => Customer::find($id)]);
    }
}
