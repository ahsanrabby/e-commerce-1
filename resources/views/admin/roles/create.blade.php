@extends('admin.master')

@section('body')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger text-center">Add Roles Form</h2>
                    <hr>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <form class="form-horizontal p-t-20" action="{{url('/roles/')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Roles Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="Roles Name">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>

                            </div>
                        </div>
                        <div class="form-group mt-1 ">
                            <label for="name" class="m-3 text-success"><h3>Permissions--</h3></label>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"  id="option-all" value="1" onchange="checkAll(this)" >
                                <label class="form-check-label1" for="option-all">Select All</label>
                            </div>
                            <hr>

                            @foreach($permission_groups as $group)

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" name="permissions[]" class="form-check-input"  id="checkPermission" value="{{$group->name}}">
                                                <label class="form-check-label" for="checkPermission">{{$group->name}}</label>
                                            </div>

                                        </div>
                                        <div class="col-md-9">
{{--                                            @foreach($permissions as $permission)--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input type="checkbox" name="permissions[]" class="form-check-input"  id="checkPermission{{$permission->id}}" value="{{$permission->name}}">--}}
{{--                                                    <label class="form-check-label" for="checkPermission{{$permission->id}}">{{$permission->name}}</label>--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}
                                            -----Test Permission-------
                                        </div>
                                    </div>
                            @endforeach



                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Roles</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var checkboxes = document.querySelectorAll("input[type='checkbox']");
        function checkAll(myCheckbox) {
            if(myCheckbox.checked == true){
                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = true;
                });
            }
            else{
                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = false;
                });
            }
        }
    </script>
@endsection




