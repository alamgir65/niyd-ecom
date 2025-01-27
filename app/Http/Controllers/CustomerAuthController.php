<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function index(){
        return view('customer.auth.index');
    }
    public function logout(){
        Session::forget('id');
        Session::forget('name');
        return redirect('/');
    }
}
