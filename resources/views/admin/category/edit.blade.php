@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Category Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('category.update',['id'=>$category->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="basic-default-name" placeholder="Category Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                        <div class="col-sm-10 ">
                            <label><input type="radio" name="status" {{$category->status == 0? 'checked' : ''}} value="0"/>Published</label>
                            <label><input type="radio" name="status" {{$category->status == 1? 'checked' : ''}} value="1"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Category Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" value="{{$category->image}}" class="form-control" />
                            <img src="{{asset($category->image)}}" height="50" alt="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Category description</label>
                        <div class="col-sm-10">
                            <textarea id="basic-default-message" class="form-control" placeholder="Category Description" name="description">{{$category->description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </form>
                <span class="text-success">{{session('message')}}</span>
            </div>
        </div>
    </div>

@endsection
