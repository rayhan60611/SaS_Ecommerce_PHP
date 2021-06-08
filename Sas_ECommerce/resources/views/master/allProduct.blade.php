<div class="row align-items-sm-stretch">

    @foreach ($products as $item)

    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-3 pb-4">
        
        <div class="card mt-2 text-center h-100 shadow-lg bg-white rounded">
            @if (count($item->images)>0)
            <a href="{{route('products.show' ,$item->slug)}}"> <img src="{{ asset('/images/Products/'. $item->images[0]->image) }}"
                class="card-img-top feature-img img-fluid p-2" alt="{{$item->title}}" ></a>  
            @else
            <a href="{{route('products.show' ,$item->slug)}}"> <img src="{{asset('/images/noimage.png')}}"
                class="card-img-top feature-img img-fluid p-2" alt="{{$item->title}}" ></a> 
            @endif
 
            <div class="card-body d-flex flex-column justify-content-end">
                <a href="{{route('products.show', $item->slug)}}"><p class="card-title "><span class="badge bg-danger text-white text-wrap"> {{$item->title}}</span></p></a>
                <span class="badge  text-wrap bg-success text-white">Price {{$item->price}} BDT</span>
                <p class="card-text text-wrap ">
                    {{substr($item->description,0,10)}}...
                </p>
                <a href="#" class="btn btn-outline-danger">Add to Cart</a>
            </div>
    
        </div>
 
    </div>

    @endforeach

</div>



<div class="d-flex justify-content-center pt-5">
    {{ $products->links('pagination::bootstrap-4') }}
</div>