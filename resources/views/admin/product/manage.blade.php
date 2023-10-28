@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger text-center mt-5">PRODUCT MANAGE TABLE</h2>
                    <div class="table-responsive m-t-40">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <div class="d-flex flex-row-reverse">
                            <a href="{{route('product.add')}}" class="btn btn-success btn-sm">ADD PRODUCT</a>
                        </div>
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Stock Amount</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->stock_amount}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="{{$product->name}}" height="50" width="80"/></td>
                                    <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-info btn-sm">
                                            <i class="ti-info"></i>
                                        </a>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This');">
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
