@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger text-center">Order Basic Information</h4>
                    <div class="table-responsive m-t-40">
                        <table  class="table table-striped border">
                            <tr>
                                <th>Order Id</th>
                                <td>{{$order->id}}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{$order->order_date}}</td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td>{{$order->order_total}}</td>
                            </tr>
                            <tr>
                                <th>Tax Total</th>
                                <td>{{$order->tax_total}}</td>
                            </tr>
                            <tr>
                                <th>Shipping Total</th>
                                <td>{{$order->shipping_total}}</td>
                            </tr>
                            <tr>
                                <th>Order Staus</th>
                                <td>{{$order->order_status}}</td>
                            </tr>
                            <tr>
                                <th>Delivery Address</th>
                                <td>{{$order->delivery_address}}</td>
                            </tr>
                            <tr>
                                <th>Delivery Staus</th>
                                <td>{{$order->delivery_status}}</td>
                            </tr>
                            <tr>
                                <th>Payment Type</th>
                                <td>{{$order->payment_type == 1 ? 'Cash On Delivery' : 'Online'}}</td>
                            </tr>
                            <tr>
                                <th>Payment Staus</th>
                                <td>{{$order->payment_status}}</td>
                            </tr>
                            <tr>
                                <th>Currency</th>
                                <td>{{$order->currency}}</td>
                            </tr>
                            <tr>
                                <th>Transaction Id</th>
                                <td>{{$order->transaction_id}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center text-success">Order Customer Information</h4>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            <thead>
                            <tr class="text-center text-success">
                                <th>Customer Name</th>
                                <th>Mobile</th>
                                <th>Email Address</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <td>{{$order->customer->name}}</td>
                                <td>{{$order->customer->mobile}}</td>
                                <td>{{$order->customer->email}}</td>
                                <td>{{$order->delivery_address}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center text-info">Order Product Information</h4>
                    <div class="table-responsive m-t-40">
                        <table class="table table-striped border">
                            <thead>
                            <tr class="text-center text-success">
                                <th>Sl No</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Order Amount</th>
                                <th>Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderDetails as $orderDetail)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$orderDetail->product_name}}</td>
                                <td>{{$orderDetail->product_price}}</td>
                                <td>{{$orderDetail->product_qty}}</td>
                                <td>{{$orderDetail->product_price * $orderDetail->product_qty}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
