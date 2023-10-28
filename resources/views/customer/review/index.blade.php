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
                        <li>Complete Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 offset-3">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-center text-danger">Comments</h1>
                            </div>
                            <div class="card-body">
                                <h5 class="text-center text-success">{{session('message')}}</h5>
                                <form action="{{route('user.review-new')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <label>Full Name</label>
                                                <div class="col-md-12 form-input form">
                                                    <input type="text" required name="name" class="form-control mt-2 mb-2" value="{{$customer->name}}" readonly placeholder="Full Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Email Address</label>
                                                <div class="form-input form">
                                                    <input type="text" required name="email" class="form-control mt-2 mb-2" value="{{$customer->email}}" readonly placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-form form-default">
                                                <label>Public Comments</label>
                                                <div class="form-input form">
                                                    <textarea name="review" class="form-control mt-2" placeholder="Your Review" style="padding-top: 10px; height: 100px;"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="single-form button">
                                                <button type="submit" class="btn m-3">Submit</button>
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
