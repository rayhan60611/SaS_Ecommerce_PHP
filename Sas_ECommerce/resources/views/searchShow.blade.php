@extends('master.master')

@section('title')
{{$search}} | SaS Ecommerce
@endsection

@section('content')
<!-- Start sideBar + cards -->
@if ($SearchCound == 0)
<div class="container mt-2 ">
    <div class="row">
        <div class="col-md-3 my-4">
            @include('master.product-sidebar')
        </div>
        <div class="col-md-9">
            <div class="widget ">
                <div class="d-flex justify-content-between">
                    <h3 class="h3Tag">{{$search}} Search Result</h3>
                    <span class="badge badge-dark">Total : {{$SearchCound}} Item Found</span>
                </div>
                
                <div class="d-flex flex-column justify-content-center align-items-center searchDiv shadow-lg p-3 mb-5 bg-white rounded">
                    <h1 class="h3Tag">Sorry No Item Found</h1>
                    <p>
                    <a class="h3Tag" href="{{route('home')}}">Go SaS To Home</a></p>
                </div>

            </div>
        </div>

    </div>
</div>
   
      

@else
<div class="container mt-2 ">
    <div class="row">
        <div class="col-md-3 my-4">
            @include('master.product-sidebar')
        </div>
        <div class="col-md-9">
            <div class="widget">
                <div class="d-flex justify-content-between">
                    <h3 class="h3Tag">{{$search}} Search Result</h3>
                    <p class="">Total : {{$SearchCound}} Item Found</p>
                </div>
                
                @include('master.allProduct')

            </div>
        </div>

    </div>
</div>
@endif


<!-- End sideBar + Cards-->
@endsection