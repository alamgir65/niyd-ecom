@extends('admin.master')

@section('title')
    manage-product
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <h3 class="text-center">Customer Information</h3>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Customer Name</th>
                    <td>{{$customer->name}}</td>
                </tr>
                <tr>
                    <th>Customer Email</th>
                    <td>{{$customer->email}}</td>
                </tr>
                <tr>
                    <th>Customer Mobile</th>
                    <td>{{$customer->mobile}}</td>
                </tr>
                <tr>
                    <th>Customer Address</th>
                    <td>{{$customer->address}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
