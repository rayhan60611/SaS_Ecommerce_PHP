@extends('master.master')

@section('content')
<!-- Start sideBar + cards -->
<div class="container mt-2 ">
    <div class="row">
        <div class="col-md-3 my-4">
            @include('master.product-sidebar')
        </div>
        <div class="col-md-9">
            <div class="widget">
                <h3 class="h3Tag">Feature Products</h3>
                <div class="row">

                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                        <div class="card pt-2 mt-2 text-center">
                            <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                class="card-img-top feature-img img-fluid" alt="Product Images">
                            <div class="card-body">
                                <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                <p class="card-text text-wrap">
                                    Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                </p>
                                <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                        <div class="card pt-2 mt-2 text-center">
                            <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                class="card-img-top feature-img img-fluid" alt="Product Images">
                            <div class="card-body">
                                <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                <p class="card-text text-wrap">
                                    Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                </p>
                                <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                        <div class="card pt-2 mt-2 text-center">
                            <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                class="card-img-top feature-img" alt="Product Images">
                            <div class="card-body">
                                <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                <p class="card-text text-wrap">
                                    Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                </p>
                                <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                        <div class="card pt-2 mt-2 text-center">
                            <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                class="card-img-top feature-img" alt="Product Images">
                            <div class="card-body">
                                <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                <p class="card-text text-wrap">
                                    Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                </p>
                                <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- End sideBar + Cards-->
@endsection