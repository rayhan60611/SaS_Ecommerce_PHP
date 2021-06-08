@extends('admin.master.master')


@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Add Category</h3>
            </div>
            <div class="card-body">
                @include('admin.master.messege')
                <form action="{{ route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="c_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="c_name"
                            placeholder="Enter Category Name">
                    </div>

                    <div class="form-group  mb-3 ">
                        <label for="c_image" class="form-label">Category Image</label>
                        <input type="file" class="form-control " name="category_image" id="p_image">
                    </div>

   
    
                    <div class="form-group mb-3">
                        <label for="c_parent_id" class="form-label">Parent Category</label>
                        <select  class="form-control " name="parent_id" id="c_parent_id">
                            <option disabled selected>Select Parent Category...</option>
                            <option value="">Primary Category</option>
                            @foreach ($primary_categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group  mb-3">
                        <label for="p_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="p_description" cols="30" rows="10"
                            placeholder="Enter Category Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
            </div>


            </form>
        </div>
    </div>
</div>
</div>

@endsection