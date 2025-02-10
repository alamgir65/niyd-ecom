@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col">
            <!-- DataTable with Buttons -->
            <div class="card">
                <div class="card-datatable pt-0">
                    <table class="table table-bordered">
                        <span class="text-success">{{session('message')}}</span>
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Customer Info</th>
                            <th>Order Date</th>
                            <th>Order Total</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{isset($order->customer->name)?$order->customer->name:''}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>
                                    <a href="{{route('order.detail',['id' => $order->id])}}" class="btn btn-secondary my-1">
                                        Detail
                                    </a>
                                    <a href="{{route('order.invoice',['id'=>$order->id])}}" class="btn btn-primary my-1">
                                        Invoice
                                    </a>
                                    <a href="{{route('order.invoice-print',['id' => $order->id])}}" target="_blank" class=" my-1 btn btn-info">
                                        Print
                                    </a>
                                    <a href="{{route('order.edit',['id' => $order->id])}}" class="btn btn-success my-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('order.delete',['id' => $order->id])}}" class="btn btn-danger my-1 {{$order->order_status=='Cancel'?'':'disabled'}}" onclick="confirm('Are you sure want to delete this brand?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal to add new record -->
            {{--            add dewar r kichu nai --}}
        </div>
    </div>
@endsection
