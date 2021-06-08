<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top text-white mt-0">

    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><strong>SAS</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pr-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contacts</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

            </ul>
    
            <form action="{{route('products.search')}}" method="get" class="form-inline my-2 my-lg-0 w-100">
                <div class="input-group w-100">
                    <input type="search" class="form-control inputSearch" placeholder="Search Products..."
                        aria-label="text"  name="search" aria-describedby="button-addon2">
                        <div class="input-gropu-append">
                    <button class="btn btn-outline-light" type="submit" id="button-addon2"><i
                            class="fas fa-search"></i></button>
                    </div>
                </div>
        
            </form>
        </div>

    </div>
</nav>

<!-- End Navbar -->