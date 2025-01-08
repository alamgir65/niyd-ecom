@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Brand Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form  method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Publication Status</label>
                        <div class="col-sm-10">
                            <label><input type="radio" name="status" value="0"/>Published</label>
                            <label><input type="radio" name="status" value="1"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Brand Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Brand description</label>
                        <div class="col-sm-10">
                            <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
