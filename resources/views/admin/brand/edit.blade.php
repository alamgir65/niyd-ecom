@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Brand Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form  method="post" action="{{route('brand.update',['id'=>$brand->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$brand->name}}" class="form-control" placeholder="Brand Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2">Publication Status</label>
                        <div class="col-sm-10">
                            <label><input type="radio" name="status" value="1" {{$brand->status==1?'checked':''}}/>Published</label>
                            <label class="mx-4"><input type="radio" name="status" value="0" {{$brand->status==0?'checked':''}}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Brand Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image"/>
                            <img src="{{asset($brand->image)}}" height="50" alt="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Brand description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" placeholder="Brand Description">{{$brand->description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>

@endsection
