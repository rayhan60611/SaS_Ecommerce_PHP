@extends('admin.master.master')


@section('content')
@php
    $i =0;
    $slNo=0;
@endphp

<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            @include('admin.master.messege') 
            <div class="card-header d-flex justify-content-around">
                <h3 >Manage Brands</h3>
                @foreach ($brands as $brand)
                @php
                    $i++;
                @endphp
                 
                
                @endforeach
                <h5 class="text-primary">Total Brands : {{$i}}</h5>
            </div>
            <div class="card-body" style="overflow-x:auto;">
               
                <table class="table table-striped table-hover">
                    <thead class="bg-primary text-white text-wrap justify-content-center align-items-center">
                        <tr>
                            <th>
                                Sl No
                            </th>
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Image
                            </th>
                          
                            <th>
                                Last Updated
                            </th>
                            <th>
                                Brand Created
                            </th>
                            <th class="d-flex flex-row justify-content-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            @php
                                $slNo++;
                            @endphp
                        <tr >
                            <td >
                                {{$slNo}}
                            </td>
                            <td >
                                <h6 class="text-white"><span class="badge bg-danger">{{$brand->id}}</span></h6>
                            </td>
                            <td >
                                <span class="badge badge-primary text-wrap">
                                {{$brand->name}}
                                </span>
                            </td>
                            <td >
                                @include('admin.AdminComponent.adminModal' ,['id'=>$brand->id , 'description'=>$brand->description, 'title'=>$brand->name])
                                {{-- {{$brand->description}} --}}
                            </td>
                            <td>
                                @if ($brand->image == NULL)
                                <img src="{{asset('/images/noimage.png')}}" width="40px"> 
                                @else
                                <img src="{{asset('/images/brands/'. $brand->image)}}" width="40px"> 
                                @endif   
                            </td>
                    
                            <td>
                                <span class="badge badge-primary text-wrap">
                                {{$brand->updated_at ? $brand->updated_at->diffForHumans() : 'Empty'}}
                                </span>
                            </td>
                            <td>
                                <span class="badge badge-primary text-wrap">
                                {{$brand->created_at ? $brand->created_at->isoFormat('MMMM Do YYYY, h:mm a') : 'Empty'}}
                                </span>
                            </td>
                            <td class="d-flex flex-row justify-content-between align-items-center">
                                <a href="{{route('admin.brand.edit' , $brand->id )}}" class="btn btn-outline-success btn-sm"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-outline-danger btn-sm" href="#deleteModal{{$brand->id}}" data-toggle="modal"><i
                                        class="fas fa-trash"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{$brand->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="exampleModalLabel">Are You Sure to Delete ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="{{route('admin.brand.delete' , $brand->id)}}" method="post">
                                                {{csrf_field()}}
                                            <div class="modal-body">
                                                <h4>So you are Permanently deleting</h4>
                                                <h3 class="text-danger">Brand ID: {{$brand->id}}</h3>
                                                <h3 class="text-danger">Brand Name: {{$brand->name}}</h3>
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
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection