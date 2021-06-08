@extends('admin.master.master')


@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Update Category</h3>
            </div>
            <div class="card-body">
                @include('admin.master.messege')
                <form action="{{ route('admin.category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="c_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="c_name"
                            value=" {{$category->name}}">
                    </div>

                    <div class="form-group  mb-3 ">
                        <div class="d-flex  justify-content-between align-item-center flex-wrap">
                            <div> 
                                <label for="c_image" class="form-label">Category Old Image</label>
                                @if ($category->image == NULL)
                                <img src="{{asset('/images/noimage.png')}}" width="300px"> 
                                @else
                                <img src="{{asset('/images/categories/'. $category->image)}}" width="300px"> 
                                @endif   
                            </div>
                            <div>
                                <label for="c_image" class="form-label">Choose Category New Image</label>
                                <input type="file" class="form-control " name="category_image" id="p_image">
                            </div>
                        </div>
                       
                    </div>

   
    
                    <div class="form-group mb-3">
                        <label for="c_parent_id" class="form-label">Parent Category</label>
                        <select  class="form-control " name="parent_id" id="c_parent_id">
                            <option disabled >Select Parent Category...</option>
                            <option value="">Primary Category</option>
                            @foreach ($primary_categories as $item)
                            <option  value="{{$item->id}}" {{$item->id == $category->parent_id ? 'selected' : ' ' }}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="p_description" cols="30" rows="10"
                           >{{$category->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Category</button>
            </div>


            </form>
        </div>
    </div>
</div>
</div>

@endsection