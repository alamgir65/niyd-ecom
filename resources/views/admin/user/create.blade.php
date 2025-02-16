@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add User Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">User Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Category Name" />
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">User Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="basic-default-name" placeholder="Category Email" />
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">User Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="basic-default-name" placeholder="Category Email" />
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">User Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">User Mobile</label>
                        <div class="col-sm-10">
                            <input type="number" name="mobile" class="form-control" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </div>
                    </div>
                </form>
                <span class="text-success">{{session('message')}}</span>
            </div>
        </div>
    </div>

@endsection
