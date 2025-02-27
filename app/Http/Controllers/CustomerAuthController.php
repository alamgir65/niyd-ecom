<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Session;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public $customer;
    public function index(){
        return view('customer.auth.index');
    }
    public function register(Request $request){
        Customer::newCustomer($request);
        $this->customer = Customer::where('email',$request->email)->first();
        Session::put('id', $this->customer->id);
        Session::put('name', $this->customer->name);
        return redirect('/customer/dashboard/profile');
    }
    public function loginCheck(Request $request){
        $this->customer = Customer::where('email',$request->email)->first();
        if($this->customer){
            if (password_verify($request->password,$this->customer->password)){
                Session::put('id',$this->customer->id);
                Session::put('name',$this->customer->name);

                return redirect('/customer/dashboard');
            }else{
                return back()->with('message','Password is invalid.');
            }
        }else{
            return back()->with('message','Email address is invalid.');
        }
    }
    public function logout(){
        Session::forget('id');
        Session::forget('name');
        return redirect('/');
    }
    public function dashboard(){
        return view('customer.dashboard.index');
    }
}
