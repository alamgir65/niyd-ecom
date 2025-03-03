<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Cart;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\SslCommerzPaymentController;

class CheckoutController extends Controller
{
    private $customer;
    public function index(){
        if(Session::get('id')){
            return redirect('/checkout/billing-info');
        }
        return view('website.checkout.index');
    }
    public function newCustomer(Request $request){
        Customer::newCustomer($request);
        $this->customer = Customer::where('email',$request->email)->first();
        Session::put('id', $this->customer->id);
        Session::put('name', $this->customer->name);
        return redirect('/checkout/billing-info');
    }
    public function billingInfo(){
        return view('website.checkout.billing-info',['cart_products' => Cart::content()]);
    }
    public function customerLogin(Request $request){
//        return $request;
        $this->customer = Customer::where('email',$request->email)->first();
        if($this->customer){
            if (password_verify($request->password,$this->customer->password)){
                Session::put('id',$this->customer->id);
                Session::put('name',$this->customer->name);

                return redirect('/checkout/billing-info');
            }else{
                return back()->with('message','Password is invalid.');
            }
        }else{
            return back()->with('message','Email address is invalid.');
        }
    }
    private $orderId;
    public function newOrder(Request $request)
    {
//        return $request;
        if($request->payment_method == 'cash'){
            $this->orderId = Order::newOrder($request);
            OrderDetail::newOrderDetail($this->orderId);
            return redirect('/checkout/complete-order')->with('message','you Order info successfully . Place wait we will Connect With you soon');
        }
        elseif($request->payment_method == 'online'){
            $sslCommerzPayment = new SslCommerzPaymentController();
            $sslCommerzPayment->index($request);
        }

    }
    public function completeOrder(Request $request){
        return view('website.checkout.complete-order');
    }
}
