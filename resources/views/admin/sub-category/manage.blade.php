@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card ">
                <div class="card-body">
                    <h2 class="card-title text-danger text-center mt-5">SUB CATEGORY TABLE</h2>

                    <div class="table-responsive m-t-40">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <table id="myTable" class="table table-striped border">
                            <div class="d-flex flex-row-reverse">
                                <a href="{{route('sub-category.add')}}" class="btn btn-success btn-sm"><i class="ti-plus"></i>ADD SUB-CATEGORY</a>
                            </div>
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sub_categories as $sub_category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$sub_category->category->name}}</td>
                                <td>{{$sub_category->name}}</td>
                                <td>{{$sub_category->description}}</td>
                                <td><img src="{{asset($sub_category->image)}}" alt="{{$sub_category->name}}" height="50" width="80"/></td>
                                <td>{{$sub_category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This');">
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
