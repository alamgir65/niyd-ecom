@extends('website.master')
@section('title')
    Checkout
@endsection

@section('body')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->



    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
        <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label>Delivery address  <span>*</span></label>
                                    <textarea name="address" class="form-control" placeholder="Order Delivery address"></textarea>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Payment Method <span>*</span></label>
                                    <div class="mt-2">
                                        <label class="text-center"><input type="radio" checked name="payment_method" value="cod">Cash On Delivery</label>
                                        <label class="text-center"><input type="radio" name="payment_method" value="online">Online</label>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <input type="submit" value="Confirm Order" class="btn btn-success bg-success text-white rounded-0">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum = 0)
                                    @foreach($cart_products as $cart_product)
                                    <tr>
                                        <td> {{$cart_product->name}}  <strong> ({{$cart_product->price}} × {{$cart_product->qty}})</strong></td>
                                        <td>{{$cart_product->qty * $cart_product->price}}</td>
                                        @php($sum += ($cart_product->qty * $cart_product->price))
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>{{$sum}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>{{$shipping = 170}}</strong></td>
                                    </tr>
                                    <tr>
                                        <th>Tax Amount (15%)</th>
                                        <td><strong>{{$tax = round(($sum * 0.15))}}</strong></td>
                                    </tr>

                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>{{$orderTotal = $sum + $shipping + $tax}}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <input id="payment" name="check_method" type="radio" data-bs-target="createp_account" />
                                    <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Create an account?</label>

                                    <div id="method" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-default">
                                    <input id="payment_defult" name="check_method" type="radio" data-bs-target="createp_account" />
                                    <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="{{asset('/')}}website/img/icon/papyel.png" alt=""></label>

                                    <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_button">
                                    <button  type="submit">Proceed to PayPal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->


    <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="newsletter_inner">
                        <div class="newsletter_content">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <div class="newsletter_form">
                            <form action="#">
                                <input placeholder="Email..." type="text">
                                <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->



@endsection
