@extends('admin.master.master')


@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Add Product</h3>
            </div>
            <div class="card-body">
                @include('admin.master.messege')
                <form action="{{ route('admin.create.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group mb-3">
                        <label for="p_title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="p_title"
                            placeholder="Enter Product Title">
                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="p_price"
                            placeholder="Enter Product Price">
                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="p_quantity"
                            aria-describedby="emailHelp" placeholder="Enter Product Quantity">
                    </div>
                    <div class="row">

                        <div class="form-group col-md-4  mb-3">
                            <label for="p_image" class="form-label">Product Image 1</label>
                            <input type="file" class="form-control" name="product_image[]" id="p_image1">
                        </div>

                        <div class="form-group col-md-4  mb-3">
                            <label for="p_image" class="form-label">Product Image 2</label>
                            <input type="file" class="form-control" name="product_image[]" id="p_image2">
                        </div>

                        <div class="form-group col-md-4 mb-3">
                            <label for="p_image" class="form-label">Product Image 3</label>
                            <input type="file" class="form-control" name="product_image[]" id="p_image3">
                        </div>

                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_brand_id" class="form-label">Brand ID</label>
                        <select class="form-control" name="brand_id" id="brand_id">
                            <option  disabled selected value="">Choose a Brand</option>
                            @foreach (App\Models\Brand::orderBy('name' , 'asc')->get() as $brand)
                            <option  value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>

                      <div class="form-group  mb-3">
                        <label for="p_category_id" class="form-label">Category ID</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option  disabled selected value="">Choose a Category</option>
                            @foreach (App\Models\Category::orderBy('name' ,'asc')->where('parent_id',NULL)->get() as $parentItem)
                            <option  value="{{$parentItem->id}}">{{$parentItem->name}}</option>
                                @foreach (App\Models\Category::orderBy('name' ,'asc')->where('parent_id', $parentItem->id)->get() as $childItem)
                                <option  value="{{$childItem->id}}">----->{{$childItem->name}}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group  mb-3 ">
                        <label for="status_id" class="form-label">Product Status</label>
                        <!-- Rounded switch -->
                        <div class="  mb-3 d-flex flex-row justify-content-around">
                            <label class="switch">
                                <input type="checkbox" id="status_id" name="status" vaalue>
                                <span class="slider round"></span>
                            </label>
                            <label for="p_status_id" class="form-label mr-2"><span class="text-danger">
                                    <strong>Inactive</strong></span><br /><br /><span
                                    class="text-success"><strong>Active</strong></span></label>
                        </div>
                    </div>


                    <div class="form-group  mb-3">
                        <label for="p_offer_price" class="form-label">Offer Price</label>
                        <input type="number" class="form-control" name="offer_price" id="offer_price"
                             placeholder="Enter Product Offer Price">
                    </div>




                    <div class="form-group  mb-3">
                        <label for="p_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="p_description" cols="30" rows="10"
                            placeholder="Enter Product Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
            </div>


            </form>
        </div>
    </div>
</div>
</div>

@endsection