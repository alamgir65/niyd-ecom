@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Product Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                        <div class="col-sm-10">
                            <select name="category_id" id="" class="form-control">
                                <option value="">--Select Product Category--</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Sub-Category</label>
                        <div class="col-sm-10">
                            <select name="sub_category_id" id="" class="form-control">
                                <option value="">--Select Product Sub-category--</option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Name</label>
                        <div class="col-sm-10">
                            <select name="brand_id" id="" class="form-control">
                                <option value="">--Select Product Brand--</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Unit Name</label>
                        <div class="col-sm-10">
                            <select name="brand_id" id="" class="form-control">
                                <option value="">--Select Product Unit--</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" >Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Product Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" >Product Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="code" placeholder="Product Code" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" >Product Price</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Regular Price" name="regular_price">
                                <input type="number" class="form-control" placeholder="Selling Price" name="selling_price">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" >Stock Amount</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2" >Publication Status</label>
                        <div class="col-sm-10 ">
                            <label><input type="radio" name="status" value="0" checked/>Published</label>
                            <label><input type="radio" name="status" value="1"/>Unpublished</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Product Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Other's Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="other_image"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Short description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Short description" name="short_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Long description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="summernote" placeholder="Long description" name="long_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Meta Title</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Meta Title" name="meta_title"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label">Meta Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Meta Description" name="meta_description"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
