@extends('admin.master')

@section('title')
    manage-product
@endsection

@section('body')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Customer Name</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Customer Email</th>
                    <td>{{$product->code}}</td>
                </tr>
                <tr>
                    <th>Customer Mobile</th>
                    <td>{{isset($product->category->namer)?$product->category->name:'Category Does not exists'}}</td>
                </tr>
                <tr>
                    <th>Customer /th>
                    <td>{{isset($product->subCategory->name)?$product->subCategory->name:'Sub-category not exists'}}</td>
                </tr>
                <tr>
                    <th>Product Brand</th>
                    <td>{{isset($product->brand->name)?$product->brand->name:'Brand not exists'}}</td>
                </tr>
                <tr>
                    <th>Product Unit</th>
                    <td>{{isset($product->unit->name)?$product->unit->name:'Unit does not exists'}}</td>
                </tr>
                <tr>
                    <th>Product Regular Price</th>
                    <td>{{$product->regular_price}}</td>
                </tr>
                <tr>
                    <th>Product Selling Price</th>
                    <td>{{$product->selling_price}}</td>
                </tr>
                <tr>
                    <th>Product Stock Amount</th>
                    <td>{{$product->stock}}</td>
                </tr>
                <tr>
                    <th>Product Short Description</th>
                    <td>{{$product->short_description}}</td>
                </tr>
                <tr>
                    <th>Product Long Description</th>
                    <td>{!! $product->long_description !!}</td>
                </tr>
                <tr>
                    <th>Product Image</th>
                    <td>
                        <img src="{{asset($product->image)}}" height="100" alt="img">
                    </td>
                </tr>
                <tr>
                    <th>Product Other's Image</th>
                    <td>
                        @foreach($product->otherImage as $image)
                            <img src="{{asset($image->image)}}" height="100" alt="img">
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Product Meta Title</th>
                    <td>{{$product->meta_title}}</td>
                </tr>
                <tr>
                    <th>Product Meta Description</th>
                    <td>{{$product->meta_description}}</td>
                </tr>
                <tr>
                    <th>Product Total Views</th>
                    <td>{{$product->hit_count}}</td>
                </tr>
                <tr>
                    <th>Sold Count</th>
                    <td>{{$product->sales_count}}</td>
                </tr>
                <tr>
                    <th>Product Featured Status</th>
                    <td>{{$product->feature_status}}</td>
                </tr>

            </table>
        </div>
    </div>
@endsection
