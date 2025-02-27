<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerDashboardController extends Controller
{
    public function profile(){
        return view('customer.profile.index');
    }
    public function order(){
        return view('customer.order.index',['orders' => Order::where('customer_id',Session::get('id'))->get()]);
    }
    public function wishlist(){
        return view('customer.wishlist.index');
    }
    public function changePassword(){
        return view('customer.password.index');
    }

}
