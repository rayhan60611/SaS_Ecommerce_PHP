@extends('admin.master.master')


@section('content')
{{-- @php
    dd($product_image);
@endphp --}}

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Update Product Details</h3>
            </div>
            <div class="card-body">
                @include('admin.master.messege')
                <form action="{{ route('admin.products.update' , $product->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group mb-3">
                        <label for="p_title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="p_title" value="{{$product->title}}">
                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="p_price" value="{{$product->price}}">
                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="p_quantity"
                            aria-describedby="emailHelp" value="{{$product->quantity}}">
                    </div>
                    {{-- <div class="row"> --}}
                        <div class="d-flex  justify-content-between align-item-center flex-wrap form-group  mb-3">
                            @foreach ($product_image as $item)
                            <div> 
                                <label for="c_image" class="form-label">Product Old Image</label>
                                @if ($item->image == NULL)
                                <img src="{{asset('/images/noimage.png')}}" width="300px"> 
                                @else
                                <div class="d-flex flex-row justify-content-between flex-wrap">
                                <img src="{{asset('/images/products/'. $item->image)}}" width="300px" height="300px"> 
                                 </div>
                                @endif   
                            </div>
                            @endforeach
                            <div class="form-group  mb-3 mt-3">
                                <label for="c_image" class="form-label">Choose Product New Image</label>
                                <div class="form-group">
                                    <label for="p_image" class="form-label">Product Image 1</label>
                                    <input type="file" class="form-control" name="product_image[]" id="p_image1">
                                </div>
        
                                <div class="form-group">
                                    <label for="p_image" class="form-label">Product Image 2</label>
                                    <input type="file" class="form-control" name="product_image[]" id="p_image2">
                                </div>
        
                                <div class="form-group">
                                    
                                    <label for="p_image" class="form-label">Product Image 3</label>
                                    <input type="file" class="form-control" name="product_image[]" id="p_image3">
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group  mb-3">
                            <label for="p_brand_id" class="form-label">Brand ID</label>
                            <select class="form-control" name="brand_id" id="brand_id">
                                <option  disabled  value="">Choose a Brand</option>
                                @foreach (App\Models\Brand::orderBy('name' , 'asc')->get() as $brand)
                                <option  value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ""}}>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
    
                          <div class="form-group  mb-3">
                            <label for="p_category_id" class="form-label">Category ID</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option  disabled  value="">Choose a Category</option>
                                @foreach (App\Models\Category::orderBy('name' ,'asc')->where('parent_id',NULL)->get() as $parentItem)
                                <option  value="{{$parentItem->id}}" {{$parentItem->id == $product->category_id ? 'selected' : ""}}>{{$parentItem->name}}</option>
                                    @foreach (App\Models\Category::orderBy('name' ,'asc')->where('parent_id', $parentItem->id)->get() as $childItem)
                                    <option  value="{{$childItem->id}}" {{$childItem->id == $product->category_id ? 'selected' : ""}}>{{$parentItem->name}}--->{{$childItem->name}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>


                    <div class="form-group  mb-3 ">
                        <label for="status_id" class="form-label">Product Status</label>
                        <!-- Rounded switch -->
                        <div class="  mb-3 d-flex flex-row justify-content-around">
                            <label class="switch">
                                <input type="checkbox" id="status_id" name="status" {{ $product->status ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                            <label for="p_status_id" class="form-label mr-2"><span class="text-danger" id="inactive">
                                    <strong>Inactive</strong></span><br /><br /><span
                                    class="text-success" id="active"><strong>Active</strong></span></label>
                        </div>
                    </div>


                    <div class="form-group  mb-3">
                        <label for="p_offer_price" class="form-label">Offer Price</label>
                        <input type="number" class="form-control" name="offer_price" id="offer_price"
                             placeholder="Enter Product Offer Price" value="{{$product->offer_price}}">
                    </div>


                    <div class="form-group  mb-3">
                        <label for="p_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="p_description" cols="30" rows="10"
                        >{{$product->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
            </div>


            </form>
        </div>
    </div>
</div>
</div>
{{-- <script>
    $(document).ready(function(){
        $("#status_id").click(function(){
            if($(this).prop("checked") == true){
                $( "#inactive" ).hide();
                $( "#active" ).show();
                console.log("Checkbox is checked.");
            }
            else if($(this).prop("checked") == false){
                $( "#inactive" ).show();
                $( "#active" ).hide();
                console.log("Checkbox is unchecked.");}
        });
    });
</script> --}}

@endsection

