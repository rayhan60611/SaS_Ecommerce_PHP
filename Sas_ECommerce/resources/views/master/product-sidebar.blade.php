<div class="list-group list-group-flush shadow-lg p-3 mb-5 bg-white rounded ">
    

    <a href="#" class="list-group-item list-group-item-action active listGroupHeader" aria-current="true">
    <span class="badge badge-danger"> CATEGORIES</span> 

    </a>
    @foreach (App\Models\Category::orderBy('name' ,'asc')->where('parent_id',NULL)->get() as $parentItem)
  
    <a href="#categoryParent{{$parentItem->id}}" class="list-group-item list-group-item-action card"
        data-toggle="collapse">
        @if ($parentItem->image == NULL)
        <span class="badge badge-primary"> {{$parentItem->name}}</span> 
        @else
        <img src="{{ asset('images/categories/'. $parentItem->image)}}" width="30" height="20" alt="Category Image">
        <span class="badge badge-primary"> {{$parentItem->name}}</span> 
        @endif

    </a>


    <div class="collapse" id="categoryParent{{$parentItem->id}}">
        <div class="child-rows">
            @foreach (App\Models\Category::orderBy('name' ,'asc')->where('parent_id', $parentItem->id)->get() as
            $childItem)
            <a href="{{ route('categories.show' , $childItem->slug) }}" class="list-group-item list-group-item-action card">
                <img src="{{ asset('images/categories/'. $childItem->image)}}" width="20" height="20"
                    alt="Category Image"> 
                    <span class="badge badge-warning"> {{$childItem->name}} </span> 
            </a>
            @endforeach
        </div>
    </div>
    @endforeach
</div>