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
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td>
                                <img src="{{asset($brand->image)}}" height="50" alt="logo">
                            </td>
                            <td>{{$brand->status==1?'Published':'Unpublished'}}</td>
                            <td>
                                <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('brand.delete',['id'=>$brand->id])}}" class="btn btn-danger" onclick="confirm('Are you sure want to delete this brand?')">
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
