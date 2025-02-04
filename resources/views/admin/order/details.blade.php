@extends('admin.master')

@section('title')
    order-details
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <h4 class="m-3">Order Basic Information</h4>
        <div class="card-datatable table-responsive pt-0">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Customer Info</th>
                    <td>
                        <b>Name: </b> {{$order->customer->name}} <br>
                        <b>Mobile: </b> {{$order->customer->mobile}} <br>
                        <b>Email: </b> {{$order->customer->email}}
                    </td>
                </tr>
                <tr>
                    <th>Courier Id</th>
                    @php($courier_name = 'nai')
                    @if($order->courier_id == 1)
                        @php($courier_name = 'Sondharban')
                    @elseif($order->courier_id == 2)
                        @php($courier_name = 'SA Poribahan')
                    @elseif($order->courier_id == 3)
                        @php($courier_name = 'Pathao')
                    @elseif($order->courier_id == 4)
                        @php($courier_name = 'Korota')
                    @else
                        @php($courier_name = 'Invalid Courier Id')
                    @endif
                    <td>{{$courier_name}}</td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <td>{{$order->order_total}}</td>
                </tr>
                <tr>
                    <th>Tax Total</th>
                    <td>{{$order->tax_total}}</td>
                </tr>
                <tr>
                    <th>Shipping Total</th>
                    <td>{{$order->shipping_total}}</td>
                </tr>
                <tr>
                    <th>Order Date</th>
                    <td>{{$order->order_date}}</td>
                </tr>
                <tr>
                    <th>Order Status</th>
                    <td>{{$order->order_status}}</td>
                </tr>
                <tr>
                    <th>Delivery address</th>
                    <td>{{$order->delivery_address}}</td>
                </tr>
                <tr>
                    <th>Delivery Date</th>
                    <td>{{$order->delivery_date}}</td>
                </tr>
                <tr>
                    <th>Delivery Status</th>
                    <td>{{$order->delivery_status}}</td>
                </tr>
                <tr>
                    <th>Payment Amount</th>
                    <td>{{$order->payment_amount}}</td>
                </tr>
                <tr>
                    <th>Payment Date</th>
                    <td>{{$order->payment_date}}</td>
                </tr>
                <tr>
                    <th>Payment Status</th>
                    <td>{{$order->payment_status}}</td>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <td>{{$order->payment_method}}</td>
                </tr>
                <tr>
                    <th>Currency</th>
                    <td>{{$order->currency}}</td>
                </tr>
                <tr>
                    <th>Transaction Id</th>
                    <td>{{$order->transaction_id}}</td>
                </tr>

            </table>
        </div>
    </div>
    <div class="card mt-5">
        <h4 class="m-3">Order Product Information</h4>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>SI</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->orderDetails as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->product_id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_qty}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
