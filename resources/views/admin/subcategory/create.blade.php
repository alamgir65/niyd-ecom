@extends('admin.master')
@section('title')
    add-subcategory
@endsection

@section('body')

<!-- Basic Layout -->
<div class="col-xxl">
    <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Add Sub Category Form</h5> <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <label class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option value="">--Select Category--</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-form-label">Sub Category Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="John Doe" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                    <div class="col-sm-10 ">
                        <label><input type="radio" name="status" value="0" checked/>Published</label>
                        <label><input type="radio" name="status" value="1"/>Unpublished</label>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-form-label" >Sub Category Image</label>
                    <div class="col-sm-10">
                        <input type="file"  class="form-control phone-mask" name="image"/>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Category description</label>
                    <div class="col-sm-10">
                        <textarea id="basic-default-message" class="form-control" placeholder="Sub category description" name="description"></textarea>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create Sub-Category</button>
                    </div>
                </div>
                <span class="text-success">{{session('message')}}</span>
            </form>
        </div>
    </div>
</div>

@endsection
