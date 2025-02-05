@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Courier Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form  method="post" action="{{route('courier.update',['id' => $courier->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Courier Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$courier->name}}" class="form-control" placeholder="Brand Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Courier Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{$courier->email}}" class="form-control" placeholder="Brand Email" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2">Publication Status</label>
                        <div class="col-sm-10">
                            <label><input type="radio" name="status" value="1" {{$courier->status==1?'checked':''}}/>Published</label>
                            <label class="mx-4"><input type="radio" name="status" value="0" {{$courier->status==0?'checked':''}}/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Logo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="logo"/>
                            <img src="{{asset($courier->logo)}}" height="60" alt="logo">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address">{{$courier->address}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" placeholder="Brand Description">{{$courier->description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Courier</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>

@endsection
