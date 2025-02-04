<?php

namespace App\Models;
use Session;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static $order;

    public static function newOrder($request)
    {
        self::$order = new Order();
        self::$order->customer_id       = Session::get('id');
        self::$order->order_total       = Session::get('order_total');
        self::$order->tax_total         = Session::get('tax_total');
        self::$order->shipping_total    = Session::get('shipping_total');
        self::$order->order_date        = date('Y-m-d');
        self::$order->order_timestamp   = strtotime(date('order_date'));
        self::$order->delivery_address  = $request->delivery_address;
        self::$order->payment_method    = $request->payment_method;
        self::$order->save();
        return self::$order->id;
    }
//    public static function updateOrder($request,$id){
//        self::$order = Order::find($id);
//
//        self::$order->order_total = $request->order_total;
//        self::$order->order_status = $request->order_status;
//        self::$order->courier_id = $request->courier_id;
//        self::$order->delivery_address = $request->delivery_address;
//        self::$order->save();
//    }
    public static function deleteOrder($id){
        self::$order = Order::find($id);
        self::$order->delete();
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
