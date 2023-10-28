@extends('website.master')

@section('title')
    Customer Dashboard Page
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Add A public Comments</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#trending">return back</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group">
                            <a href="{{route('customer.dashboard')}}" class="list-group-item list-group-item-action">profile</a>
                            <a href="{{route('customer.profile')}}" class="list-group-item list-group-item-action">Dashboard</a>
                            <a href="{{route('customer.order')}}" class="list-group-item list-group-item-action">Order</a>
                            <a href="{{route('customer.account')}}" class="list-group-item list-group-item-action">Account</a>
                            <a href="{{route('customer.change-password')}}" class="list-group-item list-group-item-action">Change Password</a>
                            <a href="{{route('customer.logout')}}" class="list-group-item list-group-item-action">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center text-danger">Customer information</h5>
                        </div>
                        <div class="card-body">

                            <form action="{{route('customer.dashboard-update',['id'=>$customer->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label> Name</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="text"  name="name" class="form-control mt-2 mb-2" value="{{$customer->name}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label> Email</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="email"  name="email" class="form-control mt-2 mb-2" value="{{$customer->email}}" readonly placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label> Mobile</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="text"  name="mobile" class="form-control mt-2 mb-2" value="{{$customer->mobile}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label>Address</label>
                                            <div class="form-input form">
                                                <input type="text" name="address" class="form-control" value="{{$customer->address}}"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label> Date Of Birth</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="text"  name="date_of_birth" class="form-control mt-2 mb-2" value="{{$customer->date_of_birth}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label> NID</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="text"  name="nid" class="form-control mt-2 mb-2" value="{{$customer->nid}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-default">
                                            <label> Blood-Group</label>
                                            <div class="col-md-12 form-input form">
                                                <input type="text"  name="blood_group" class="form-control mt-2 mb-2" value="{{$customer->blood_group}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>





                                    <div class="col-md-12">
                                        <div class="single-form button">
                                            <button type="submit" class="btn m-3">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
