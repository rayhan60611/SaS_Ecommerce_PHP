@extends('admin.master.master')


@section('content')
@php
    $i =0;
    $slNo=0;
    $j=NULL;
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            @include('admin.master.messege') 
            <div class="card-header d-flex justify-content-around">
                <h3 >Manage Products</h3>
                {{-- @foreach ($productsCount as $product)
                @php
                    $i++;
                @endphp
           
                @endforeach --}}
                <h5 class="text-primary">Total Products : {{$productsCount}}</h5>
            </div>
            <div class="card-body" style="overflow-x:auto;">
               
                <table class="table table-striped table-hover">
                    <thead class="bg-primary text-white text-wrap justify-content-center align-items-center text-center">
                        <tr>
                            <th>
                                Sl No
                            </th>
                            <th>
                                Product ID
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Slug
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Offer Price
                            </th>
                            <th>
                                Admin ID
                            </th>
                            <th>
                                Category ID
                            </th>
                            <th>
                                Brand ID
                            </th>
                            <th>
                                Last Updated
                            </th>
                            <th>
                                Product Created
                            </th>
                            <th class="d-flex flex-row justify-content-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    @foreach ($products as $product)
                               
                   @if ($j !== $product->id)
                    @php
                        $slNo++;
                    @endphp
                   

                        <tr >
                            <td >
                                {{$slNo}}
                            </td>
                            <td >
                                <h6 class="text-white"><span class="badge bg-danger">{{$product->id}} </span></h6>
                            </td>
                            <td >
                                <span class="badge badge-primary text-wrap">
                                {{$product->title}}
                                </span>
                            </td>
                            <td >
                                @include('admin.AdminComponent.adminModal' ,['id'=>$product->id , 'description'=>$product->description, 'title'=>$product->title])
                            </td>
                            <td>
                                <span class="badge badge-primary text-wrap">
                                {{$product->slug}}
                                </span>
                            </td>
                            <td>
                                @if ($product->image == NULL)
                                <img src="{{asset('/images/noimage.png')}}" width="100px"> 
                                @else
                                <img src="{{asset('/images/products/'. $product->image)}}" height="50px" width="50px"> 
                                @endif   
                              
                            </td>
                            <td>
                                {{$product->quantity}}
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                @if ($product->status == '1')
                                <label class="badge badge-success">Active</label>
                                @else
                                <label class="badge badge-danger">Inactive</label>
                                @endif
                            </td>
                            <td>
                                {{$product->offer_price}}
                            </td>
                            <td>
                                {{$product->admin_id}}
                            </td>
                            <td>
                                {{$product->category_id}}
                            </td>
                            <td>
                                {{$product->brand_id}}
                            </td>
                            <td>
                                <span class="badge badge-primary text-wrap">
                                {{$product->updated_at ? $product->updated_at->diffForHumans() : 'Empty'}}
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-primary text-wrap">
                                {{$product->created_at ? $product->created_at->isoFormat('MMMM Do YYYY, h:mm a') : 'Empty'}}
                            </span>
                            </td>
                            <td class="d-flex flex-row justify-content-between align-items-center">
                                <a href="{{route('admin.products.edit' , $product->id )}}" class=" btn btn-outline-success btn-sm"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-outline-danger btn-sm" href="#deleteModal{{$product->id}}" data-toggle="modal"><i
                                        class="fas fa-trash"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Are You Sure to Delete ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{route('admin.product.delete' , $product->id)}}" method="post">
                                                {{csrf_field()}}
                                            <div class="modal-body">
                                                <h4>So you are Permanently deleting</h4>
                                                <h3 class="text-danger">Product ID: {{$product->id}}</h3>
                                                <h3 class="text-danger">Product Name: {{$product->title}}</h3>
                                                <h4>from SaS Store</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Permanenet Delete</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @php
                            $j = $product->id;
                        @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    
</div>

@endsection