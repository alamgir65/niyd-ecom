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
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <p class="text-center fs-3">You need to login to checkout. If you are not registered then please register first.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="card card-body">
                        <div class="account_form">
                            <h2 class="text-center">login</h2>
                            <hr>
                            <p class="text-danger">{{session('message')}}</p>
                            <form action="{{route('checkout.customer-login')}}" method="post">
                                @csrf
                                <p>
                                    <label>Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" required>
                                </p>
                                <p>
                                    <label>Passwords <span class="text-danger">*</span></label>
                                    <input type="password" name="password" required>
                                </p>
                                <div class="login_submit">
                                    <a href="#">Lost your password?</a>
                                    <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label>
                                    <button type="submit">login</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="card card-body">
                        <div class="account_form register">
                            <h2 class="text-center">Register</h2>
                            <hr>
                            <form action="{{route('checkout.new-customer')}}" method="post">
                                @csrf
                                <p>
                                    <label>Full Name  <span class="text-danger">*</span></label>
                                    <input type="text" name="name" required>
                                </p>
                                <p>
                                    <label>Email address  <span class="text-danger">*</span></label>
                                    <input type="text" name="email" required>
                                </p>
                                <p>
                                    <label>Mobile Number  <span class="text-danger">*</span></label>
                                    <input type="text" name="mobile" required>
                                </p>
                                <p>
                                    <label>Passwords <span class="text-danger">*</span></label>
                                    <input type="password" name="password" required>
                                </p>
                                <div class="login_submit">
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--register area end-->
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
