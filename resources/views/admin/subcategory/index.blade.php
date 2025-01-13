@extends('admin.master')
@section('title')
    manage-subcategory
@endsection

@section('body')

<div class="row">
    <div class="col">
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subcategories as $subcategory)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{isset($subcategory->category->name)?$subcategory->category->name : 'Category not found'}}</td>
                            <td>{{$subcategory->name}}</td>
                            <td>{{$subcategory->description}}</td>
                            <td>
                                <img src="{{asset($subcategory->image)}}" height="60" alt="">
                            </td>
                            <td>{{$subcategory->status==0?'Published':'Unpublished'}}</td>
                            <td>
                                <a href="{{route('subcategory.edit',['id'=>$subcategory->id])}}" class="btn btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('subcategory.delete',['id'=>$subcategory->id])}}" class="btn btn-danger" onclick="confirm('Are you sure you want to delete this Sub category?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
