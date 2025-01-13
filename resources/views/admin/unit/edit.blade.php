@extends('admin.master')
@section('title')
    add-unit
@endsection

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Unit Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('unit.update',['id'=>$unit->id])}}">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Unit Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{$unit->name}}" placeholder="Enter Unit Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$unit->code}}" name="code" placeholder="Unit code" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                        <div class="col-sm-10 ">
                            <label><input type="radio" name="status" {{$unit->status==0?'checked':''}} value="0" checked/>Published</label>
                            <label><input type="radio" name="status" {{$unit->status==1?'checked':''}} value="1"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Unit description</label>
                        <div class="col-sm-10">
                            <textarea  class="form-control" placeholder="Unit Description" name="description">{{$unit->description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Unit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection