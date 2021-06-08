@extends('master.master')

@section('title')
{{$category->name}} | SaS Ecommerce
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
                @php
                    $products = $category->products()->paginate(10);
                @endphp
                
                <h3 class="h3Tag">ALL Products in <span class="badge badge-primary">{{$category->name}}</span> category</h3>
                @include('master.allProduct')
            </div>
        </div>

    </div>
</div>

<!-- End sideBar + Cards-->
@endsection