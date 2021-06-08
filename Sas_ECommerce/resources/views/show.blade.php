@extends('master.master')

@section('title')
{{$products->title}} | SaS Ecommerce
@endsection

@section('content')
<!-- Start sideBar + cards -->
<div class="container mt-2 ">
    <div class="row">
        <div class="col-md-5 my-4">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                @php
                $i=1;
                @endphp
                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach ($products->images as $item)
                    <div class="carousel-item {{$i == 1 ? 'active' : ' '}} caroselCss">
                        <img class="d-block w-100 p-3" src="{{asset('images/products/'. $item->image)}}" alt="First slide">
                    </div>
                    @php
                    $i++;
                    @endphp
                    @endforeach

                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>


        </div>
        <div class="col-md-7 d-flex flex-column justify-content-start align-items-center mt-2 ">
            
                <h2 class="h3Tag">{{$products->title}}</h2>
                <h5 class="h3Tag">Price : {{$products->price}} Taka <span class="m-1 p-2 {{$products->quantity < 1 ? 'badge badge-warning' : 'badge badge-success' }}" >
                    {{$products->quantity < 1 ? 'Out Of Stock' : $products->quantity .' Item In Stock'}}
                    </span></h5>
                <h5 class="h3Tag">
                    Category <span class="m-1 p-2 badge badge-primary" > {{ $products->category->name}}</span>
                    Brand  <span class="m-1 p-2 badge badge-primary" >{{ $products->brand->name}}</span>
                </h5>
                <hr>
            <div class="product-description">
                {{$products->description}}
            </div>
        
         
           
        </div>

    </div>
</div>

<!-- End sideBar + Cards-->
@endsection