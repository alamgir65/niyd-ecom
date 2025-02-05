@extends('admin.master')

@section('body')

    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Order Form</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form  method="post" action="{{route('order.update',['id' => $order->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Order Total</label>
                        <div class="col-sm-10">
                            <input type="text" name="order_total" value="{{$order->order_total}}" class="form-control" placeholder="Brand Name" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Customer Info</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$order->customer->name.'('.$order->customer->mobile.')'}}" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Order Status</label>
                        <div class="col-sm-10">
                            <select name="order_status" class="form-control">
                                <option value="">--- Order Status ----</option>
                                <option value="Pending" {{$order->order_status=='Pending'?'selected':''}}>Pending</option>
                                <option value="Processing" {{$order->order_status=='Processing'?'selected':''}}>Processing</option>
                                <option value="Complete" {{$order->order_status=='Complete'?'selected':''}}>Complete</option>
                                <option value="Cancel" {{$order->order_status=='Cancel'?'selected':''}}>Cancel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Courier Info</label>
                        <div class="col-sm-10">
                            <select name="courier_id" class="form-control">
                                <option value="">--- Select Courier ----</option>
                                @foreach($couriers as $key => $courier)
                                    <option value="{{$key}}" {{$order->courier_id==$key?'selected':''}}>{{$courier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Delivery Address</label>
                        <div class="col-sm-10">
                            <textarea name="delivery_address" class="form-control">{{$order->delivery_address}}</textarea>
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
