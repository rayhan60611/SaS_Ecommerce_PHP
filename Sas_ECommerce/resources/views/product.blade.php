@extends('master.master')

@section('title')
Products | SaS Ecommerce
@endsection


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
                @include('master.allProduct')
            </div>
        </div>

    </div>
</div>

<!-- End sideBar + Cards-->
@endsection