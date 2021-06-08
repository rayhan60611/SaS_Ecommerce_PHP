@extends('admin.master.master')


@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Update Brand</h3>
            </div>
            <div class="card-body">
                @include('admin.master.messege')
                <form action="{{ route('admin.brand.update', $brand->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="c_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="c_name"
                            value=" {{$brand->name}}">
                    </div>

                    <div class="form-group  mb-3 ">
                        <div class="d-flex  justify-content-between align-item-center flex-wrap">
                            <div> 
                                <label for="c_image" class="form-label">Brand Old Image</label>
                                @if ($brand->image == NULL)
                                <img src="{{asset('/images/noimage.png')}}" width="300px"> 
                                @else
                                <img src="{{asset('/images/brands/'. $brand->image)}}" width="300px"> 
                                @endif   
                            </div>
                            
                            <div>
                                <label for="b_image" class="form-label">Choose Brand New Image</label>
                                <input type="file" class="form-control " name="brand_image" id="b_image">
                            </div>
                        </div>
                       
                    </div>


                    <div class="form-group  mb-3">
                        <label for="b_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="b_description" cols="30" rows="10"
                           >{{$brand->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Brand</button>
            </div>


            </form>
        </div>
    </div>
</div>
</div>

@endsection