<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin.order.index',['orders' => Order::latest()->get()]);
    }
    public function detail($id){
        return view('admin.order.details',['order' => Order::find($id)]);
    }
    public function edit($id){
        return view('admin.order.edit',['order' => Order::find($id)]);
    }
    public function update(Request $request,$id){
        Order::updateOrder($request,$id);
        return redirect('/order/index')->with('message','Order updated successfully');
    }
    public function delete($id){
        Order::deleteOrder($id);
        OrderDetail::deleteOrderDetails($id);
        return back()->with('message','Order deleted successfully');
    }
}
