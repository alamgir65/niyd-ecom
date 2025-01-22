<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $product;
    public function index(){
//        return Cart::content();
        return view('website.cart.index',['cart_products' => Cart::content(),'price_sum'=>0]);
    }

    public function addToCart(Request $request,$id){
        $this->product = Product::find($id);
        Cart::add([
            'id' => $this->product->id,
            'name'=>$this->product->name,
            'qty'=>$request->qty,
            'price'=>$this->product->selling_price,
            'options'=>[
                'image'=>$this->product->image,
                'code'=>$this->product->code,
            ]
        ]);
        return redirect('/cart/index');
    }
    public function remove($rowId){
        Cart::remove($rowId);
        return back()->with('Cart product removed successfully');
    }
    public function update(Request $request){
//        return $request;
        foreach ($request->qty as $item){
            Cart::update($item['rowId'],$item['qty']);
        }
        return back()->with('message','Product info update successfully');
    }
}
