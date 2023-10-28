@extends('website.master')

@section('title')
    Cust Dashboard Page
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Dashboard</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="#">Shop</a></li>
{{--                        <li><a href="{{route('user.review')}}">back to comments</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="card card-body">
                        <div class="list-group">
                            <a href="{{route('customer.dashboard')}}" class="list-group-item list-group-item-action">Profile</a>
                            <a href="{{route('customer.profile')}}" class="list-group-item list-group-item-action">Dashboard</a>
                            <a href="{{route('customer.order')}}" class="list-group-item list-group-item-action">Order</a>
                            <a href="{{route('customer.account')}}" class="list-group-item list-group-item-action">Account</a>
                            <a href="{{route('customer.change-password')}}" class="list-group-item list-group-item-action">Change Password</a>
                            <a href="{{route('customer.logout')}}" class="list-group-item list-group-item-action">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card ">
                        <div class="card-header text-center text-danger">My Dashboard</div>
                        <h4 class="text-success text-center">{{session('message')}}</h4>
                        <div class="card-body">
                            <table  class="table text-center table-bordered table-hover table-responsive table-striped">
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>mobile</th>
                                    <th>Address</th>
                                    <th>Date Of Birth</th>
                                    <th>NID</th>
                                    <th>Image</th>
                                    <th>Blood Group</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                $key = 1;
                                @endphp
                                    <tr>
                                        <td>{{$key++}}</td>
                                        <td>{{$custs->name}}</td>
                                        <td>{{$custs->email}}</td>
                                        <td>{{$custs->mobile}}</td>
                                        <td>{{$custs->address}}</td>
                                        <td>{{$custs->date_of_birth}}</td>
                                        <td>{{$custs->nid}}</td>
                                        <td>{{$custs->image}}</td>
                                        <td>{{$custs->blood_group}}</td>
                                        <td>
                                            <a href="{{route('customer.dashboard-edit',['id'=>$custs->id])}}" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
