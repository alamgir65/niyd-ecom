<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public static $customer;
    public static function newCustomer($request){
        self::$customer             = new Customer();

        self::$customer->name       =  $request->name;
        self::$customer->email      =  $request->email;
        self::$customer->mobile     =  $request->mobile;
        self::$customer->password   =  bcrypt($request->password);
        self::$customer->save();
    }
    public static function updateCustomer($request,$id){
        self::$customer         =  Customer::find($id);

        self::$customer->name       =  $request->name;
        self::$customer->email      =  $request->email;
        self::$customer->mobile     =  $request->mobile;
        self::$customer->password   =  bcrypt($request->password);
        self::$customer->save();
    }
}
