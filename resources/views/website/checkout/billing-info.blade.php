@extends('website.master')
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
                        <form action="{{route('checkout.new-order')}}" method="POST" target="_blank">
                            @csrf
                            <h3>Billing Details</h3>
                            <div class="row">


                                <div class="col-12 mb-20">
                                    <label>Delivery address  <span>*</span></label>
                                    <textarea class="form-control" name="delivery_address" placeholder="Order Delivery Address"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Payment Method</label>
                                        <div class="mt-2">
                                            <label for=""><input type="radio" name="payment_method" checked value="cash">Cash Od Delivery</label>
                                            <label for=""><input type="radio" name="payment_method" value="online">Online Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <input type="submit" class="btn btn-success bg-success text-white rounded-0" value="Confirm Order">
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
                                    @foreach(Cart::content() as $item)
                                        <tr>
                                            <td>{{$item->name}} <strong> {{$item->price}} * {{$item->qty}}</strong></td>
                                            <td>{{$item->price * $item->qty}}</td>
                                        </tr>
                                        @php($sum = $sum + ($item->price * $item->qty))
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>{{$sub_total = $sum}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax Amount</th>
                                        <td><strong>{{$tax =round(( $sum * 0.15))}}</strong></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>{{$shipping = 100}}</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>{{ $orderTotal = $sum + $tax + $shipping }}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <?php
                                Session::put('order_total', $orderTotal);
                                Session::put('tax_total', $tax);
                                Session::put('shipping_total', $shipping);
                                Session::put('order_sub_total', $sub_total);

                                ?>
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
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand1.png" alt=""></a>
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
