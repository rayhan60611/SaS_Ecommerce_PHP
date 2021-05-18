<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Start Bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--End Bootstarp -->

    <!-- Start Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- End Google Font -->

    <!--Start Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--End Fontawesome -->

    <!-- Start External CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
    <!-- End External CSS -->
    <title>SaS Home</title>
</head>

<body>
    <div class="wrapper">
        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top text-white">

            <div class="container">
                <a class="navbar-brand" href="#"><strong>SAS</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
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
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="input-group ">
                            <input type="search" class="form-control inputSearch" placeholder="Search Products..."
                                aria-label="Search" aria-describedby="button-addon2">
                            <button class="btn btn-outline-light" type="button" id="button-addon2"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </nav>

        <!-- End Navbar -->

        <!-- Start sideBar -->


        <div class="container mt-2 ">
            <div class="row">
                <div class="col-md-3 my-4">
                    <div class="list-group list-group-flush kkkk">
                        <a href="#" class="list-group-item list-group-item-action active listGroupHeader"
                            aria-current="true">
                            CATEGORIES
                        </a>
                        <a href="#" class="list-group-item list-group-item-action ListGroupItem ">A second link item</a>
                        <a href="#" class="list-group-item list-group-item-action ListGroupItem">A third link item</a>
                        <a href="#" class="list-group-item list-group-item-action ListGroupItem">A fourth link item</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="widget">
                        <h3 class="h3Tag">Feature Products</h3>
                        <div class="row">

                            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                                <div class="card pt-2 mt-2 text-center">
                                    <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                        class="card-img-top feature-img img-fluid" alt="Product Images">
                                    <div class="card-body">
                                        <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                        <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                        <p class="card-text text-wrap">
                                            Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                        </p>
                                        <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                                <div class="card pt-2 mt-2 text-center">
                                    <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                        class="card-img-top feature-img img-fluid" alt="Product Images">
                                    <div class="card-body">
                                        <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                        <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                        <p class="card-text text-wrap">
                                            Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                        </p>
                                        <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                                <div class="card pt-2 mt-2 text-center">
                                    <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                        class="card-img-top feature-img" alt="Product Images">
                                    <div class="card-body">
                                        <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                        <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                        <p class="card-text text-wrap">
                                            Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                        </p>
                                        <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-3">
                                <div class="card pt-2 mt-2 text-center">
                                    <img src="{{ asset('asset/images/Products/12promax.png') }}"
                                        class="card-img-top feature-img" alt="Product Images">
                                    <div class="card-body">
                                        <h5 class="card-title ">Iphone 12 Pro Max</h5>
                                        <span class="badge  text-wrap bg-danger">Price 120000 BDT</span>
                                        <p class="card-text text-wrap">
                                            Apple iPhone 12 Pro Max was officially released on October 13, 2020.
                                        </p>
                                        <a href="#" class="btn btn-outline-danger">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- End sideBar -->

        <!-- Start Footer  -->
        <!-- <footer class="footer-bottom">

        <p class="text-center">&copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved | SaS Ecommerce Site</p>
        </footer> -->
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Web design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Hosting</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>SaS Ecommerce</h3>
                            <p>Experience Personalized Online Shopping in Bangladesh with SaS.com.bd.Online Shopping BD
                                has never been easier. SaS.com.bd is best online shopping store in Bangladesh that
                                features 10+ million products at affordable prices. </p>
                        </div>
                        <div class="col item social"><a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Company Name © 2020-<script>
                        document.write(new Date().getFullYear())
                        </script>
                    </p>
                </div>
            </footer>
        </div>

        <!-- End Footer  -->







    </div>



    <!--Start Bootstarp -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!--End Bootstarp -->
</body>

</html>