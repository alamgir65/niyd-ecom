<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    public $customer;
    public function index(){
        if(Session::get('id')){
            return redirect('/checkout/billing-info');
        }
        return view('website.checkout.index');
    }
    public function newCustomer(Request $request){
        Customer::newCustomer($request);
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
                session::put('id',$this->customer->id);
                session::put('name',$this->customer->name);

                return redirect('/checkout/billing-info');
            }else{
                return back()->with('message','Password is invalid.');
            }
        }else{
            return back()->with('message','Email address is invalid.');
        }
    }
}
