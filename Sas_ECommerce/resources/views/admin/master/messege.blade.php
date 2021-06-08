@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@if (Session::has('success'))
<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>{{Session::get('success')}}</h4>
</div> 
@endif



