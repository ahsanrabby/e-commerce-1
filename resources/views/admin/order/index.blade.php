@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mt-5 text-primary text-center">All Order Information</h2>
                    <div class="table-responsive m-t-40">
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Order No</th>
                                <th>Order Date</th>
                                <th>Customer Info</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->customer->name. '('.$order->customer->mobile.')'}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td class="btn-group" >
                                        <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-info btn-sm m-1" title="View Order Details">
                                            <i class="ti-info-alt"></i>
                                        </a>
                                        <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-success btn-sm m-1 {{$order->order_status == 'Complete' ? 'disabled' : ''}}" title="Order Edit">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-primary btn-sm m-1" title="View Order Invoice">
                                            <i class="ti-clipboard"></i>
                                        </a>
                                        <a href="{{route('admin.print-invoice', ['id' => $order->id])}}" target="_blank" class="btn btn-dark btn-sm m-1" title="Print Order Invoice">
                                            <i class="ti-printer"></i>
                                        </a>
                                        <a href="{{route('admin.order-delete', ['id' => $order->id])}}" class="btn-sm m-1 {{$order->order_status == 'Cancel' ? 'btn btn-danger' : 'btn btn-danger disabled'}}" title="Delete Order" onclick="return confirm('Are You Sure To Delete This');">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
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
