@extends('admin.master')
@section('title')
    edit-subcategory
@endsection

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Sub Category Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('subcategory.update',['id'=>$subcategory->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                            <select name="category_id" class="form-control">
                                <option value="">--Select Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id==$subcategory->category_id?'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Sub Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$subcategory->name}}" name="name" placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2" for="basic-default-company">Publication Status</label>
                        <div class="col-sm-10 ">
                            <label><input type="radio" {{$subcategory->status == 0?'checked':''}} name="status" value="0" checked/>Published</label>
                            <label><input type="radio" {{$subcategory->status == 1?'checked':''}} name="status" value="1"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" >Sub Category Image</label>
                        <div class="col-sm-10">
                            <input type="file"  class="form-control phone-mask" name="image"/>
                            <img src="{{asset($subcategory->image)}}" height="60" alt="image">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Sub Category description</label>
                        <div class="col-sm-10">
                            <textarea id="basic-default-message" class="form-control" placeholder="Sub category description" name="description">{{$subcategory->description}}</textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Sub-Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection