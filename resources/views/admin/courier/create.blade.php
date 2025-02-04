@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Courier Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form  method="post" action="{{route('courier.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Courier Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Brand Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Courier Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="Brand Email" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2">Publication Status</label>
                        <div class="col-sm-10">
                            <label><input type="radio" name="status" value="1" checked/>Published</label>
                            <label class="mx-4"><input type="radio" name="status" value="0"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Logo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="logo"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address"><textare/>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Courier description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" placeholder="Brand Description"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Courier</button>
                        </div>
                    </div>
                    <span class="text-success">{{session('message')}}</span>
                </form>
            </div>
        </div>
    </div>

@endsection
