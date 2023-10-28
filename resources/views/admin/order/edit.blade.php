@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Orders Information</h4>
                        <form action="{{route('admin.update-order', ['id' => $order->id])}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <level class="col-md-3">Customer Info</level>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" readonly value="{{$order->customer->name. '('.$order->customer->mobile.')'}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Order Id</level>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" readonly value="{{$order->id}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Order Total</level>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" readonly value="{{$order->order_total}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Order Total</level>
                                <div class="col-md-9">
                                    <select class="form-control" name="order_status">
                                        <option value="Pending"{{$order->order_status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        <option value="Processing"{{$order->order_status == 'Processing' ? 'selected' : ''}}>Processing</option>
                                        <option value="Complete"{{$order->order_status == 'Complete' ? 'selected' : ''}}>Complete</option>
                                        <option value="Cancel"{{$order->order_status == 'Cancel' ? 'selected' : ''}}>Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3">Delivery Address</level>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <level class="col-md-3"></level>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success w-100" value="Update Order"/>
                                </div>
                            </div
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
