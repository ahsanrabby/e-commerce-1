@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger text-center mt-5">BRAND MANAGE TABLE</h2>
                    <div class="table-responsive m-t-40">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <div class="d-flex flex-row-reverse">
                            <a href="{{route('brand.add')}}" class="btn btn-success btn-sm"><i class="ti-plus"></i>ADD BRAND</a>
                        </div>
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Brand Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->description}}</td>
                                <td><img src="{{asset($brand->image)}}" alt="{{$brand->name}}" height="50" width="80"/></td>
                                <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This');">
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
