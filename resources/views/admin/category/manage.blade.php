@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger text-center mt-5">CATEGORY TABLE</h2>
                    <div class="table-responsive m-t-40">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <div class="d-flex flex-row-reverse">
                            <a href="{{route('category.add')}}" class="btn btn-success btn-sm m-3"><i class="ti-plus"></i> ADD CATEGORY </a>
                        </div>
                        <table id="myTable" class="table table-striped border">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{asset($category->image)}}" alt="{{$category->name}}" height="50" width="80"/></td>
                                <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete This');">
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
