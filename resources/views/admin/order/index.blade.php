@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col">
            <!-- DataTable with Buttons -->
            <div class="card">
                <div class="card-datatable pt-0">
                    <table class="table table-bordered">
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
                                <td>{{$order->customer->name}}</td>
                                <td>{{$order->order_date}}</td>
                                <td>{{$order->order_total}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>
                                    <a href="" class="btn btn-secondary">
                                        Detail
                                    </a>
                                    <a href="" class="btn btn-primary">
                                        Invoice
                                    </a>
                                    <a href="" class="btn btn-info">
                                        Print
                                    </a>
                                    <a href="" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger" onclick="confirm('Are you sure want to delete this brand?')">
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
