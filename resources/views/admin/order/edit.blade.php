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
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="complete">Complete</option>
                                <option value="cancel">Cancel</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Order Status</label>
                        <div class="col-sm-10">
                            <select name="courier_id" class="form-control">
                                <option value="">--- Select Courier ----</option>
                                <option value="1">Sondharban</option>
                                <option value="2">SA Poribahan</option>
                                <option value="3">Pathao</option>
                                <option value="4">Korota</option>
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
