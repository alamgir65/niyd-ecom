
@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class=" table table-bordered">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->mobile}}</td>
                                <td>{{$customer->status == 1? 'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="" class="btn btn-success my-1">Details</a>
                                    <a href="" class="btn btn-danger my-1">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <span class="text-success">{{session('message')}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
