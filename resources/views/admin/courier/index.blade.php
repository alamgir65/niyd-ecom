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
                            <th>Brand Email</th>
                            <th>Brand Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($couriers as $courier)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$courier->name}}</td>
                                <td>{{$courier->email}}</td>
                                <td>{{$courier->description}}</td>
                                <td>
                                    <img src="{{asset($courier->logo)}}" height="50" alt="logo">
                                </td>
                                <td>{{$courier->status==1?'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('courier.edit',['id' => $courier->id])}}" class="my-1 btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('courier.delete',['id' => $courier->id])}}" class="my-1 btn btn-danger" onclick="confirm('Are you sure want to delete this brand?')">
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
