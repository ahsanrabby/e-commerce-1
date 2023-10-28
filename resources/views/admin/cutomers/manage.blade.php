@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger text-center mt-5">Customers TABLE</h2>

                    <div class="table-responsive m-t-40">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <div class="d-flex flex-row-reverse">
                            {{--                            <a href="" class="btn btn-success btn-sm"><i class="ti-plus"></i>ADD UNIT</a>--}}
                        </div>
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Customer name</th>
                                <th>Customer Address</th>
                                <th>Customer Mobile</th>
                                <th>Customer blood group</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>{{$customer->mobile}}</td>
                                    <td>{{$customer->blood_group}}</td>
                                    <td>

                                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This');">
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
