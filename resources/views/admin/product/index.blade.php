@extends('admin.master')

@section('title')
    manage-product
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->code}}</td>
                        <td>
                            <img src="{{asset($product->image)}}" height="60" alt="img">
                        </td>
                        <td>{{$product->status==0?'Published':'Unpublished'}}</td>
                        <td>
                            <a href="{{route('product.detail',['id'=>$product->id])}}" class="btn btn-secondary">
                                Details
                            </a>
                            <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{route('product.delete',['id'=>$product->id])}}" onclick="return confirm('You want to delete this Product?')" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
