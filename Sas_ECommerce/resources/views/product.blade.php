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
                <h3 class="h3Tag">ALL Products</h3>
                <div class="row">

                    @foreach ($product as $item)

                    <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                        <div class="card pt-2 mt-2 text-center">
                            @foreach ($item->images as $image)
                            <img src="{{ asset('asset/images/Products/'. $image->image) }}"
                                class="card-img-top feature-img img-fluid" alt="Product Images">
                            @endforeach

                            <div class="card-body">
                                <h5 class="card-title ">{{$item->title}}</h5>
                                <span class="badge  text-wrap bg-danger">Price {{$item->price}} BDT</span>
                                <p class="card-text text-wrap">
                                    {{$item->description}}
                                </p>
                                <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>

<!-- End sideBar + Cards-->
@endsection