<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetail;
use PDF;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public $order;
    public function index(){
        return view('admin.order.index',['orders' => Order::latest()->get()]);
    }
    public function detail($id){
        return view('admin.order.details',['order' => Order::find($id)]);
    }
    public function edit($id){
        return view('admin.order.edit',['order' => Order::find($id),'couriers' => Courier::all()]);
    }
    public function update(Request $request,$id){
//        return $request;
        $this->order = Order::find($id);
        if($request->order_status=='Pending'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
        }
        else if($request->order_status=='Processing'){
            $this->order->order_status = $request->order_status;
            $this->order->courier_id = $request->courier_id;
            $this->order->delivery_address = $request->delivery_address;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
        }
        else if($request->order_status=='Complete'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->delivery_date = date('Y-m-d');
            $this->order->delivery_timestamp = strtotime(date('Y-m-d'));
            $this->order->payment_amount = $this->order->order_total;
            $this->order->payment_date = date('Y-m-d');
            $this->order->payment_timestamp = strtotime(date('Y-m-d'));

        }
        else if($request->order_status=='Cancel'){
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
        }
        $this->order->save();
        return redirect('/order/index')->with('message','Order updated successfully');
    }
    public function invoice($id){
        return view('admin.order.invoice',['order' => Order::find($id)]);
    }
    private $pdf;
    public function invoicePrint($id){
        $this->pdf = PDF::loadView("admin.order.invoice-print",['order' => Order::find($id)]);
        return $this->pdf->stream('invoice00'.$id.'.pdf');
    }
    public function delete($id){
        $this->order = Order::find($id);
        if($this->order->order_status != 'Cancel'){
            return back()->with('message','Sorry... you can not delete this');
        }
        Order::deleteOrder($id);
        OrderDetail::deleteOrderDetails($id);
        return back()->with('message','Order deleted successfully');
    }
}
