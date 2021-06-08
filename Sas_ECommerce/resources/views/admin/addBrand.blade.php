@extends('admin.master.master')


@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <h3>Add Brand</h3>
            </div>
            <div class="card-body">
                @include('admin.master.messege')
                <form action="{{ route('admin.brand.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="b_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="b_name"
                            placeholder="Enter Brand Name">
                    </div>

                    <div class="form-group  mb-3 ">
                        <label for="b_image" class="form-label">Brand Image</label>
                        <input type="file" class="form-control " name="brand_image" id="b_image">
                    </div>


                    <div class="form-group  mb-3">
                        <label for="b_description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="b_descriptionId" cols="30" rows="10"
                            placeholder="Enter Brand Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Brand</button>
            </div>


            </form>
        </div>
    </div>
</div>
</div>

@endsection