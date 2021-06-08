<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SAS Admin Dashboard</title>
    @include('admin.master.admin_styles')
</head>

<body>
    <div class="container-scroller">
        <!--Admin  Navbar start -->
        @include('admin.master.adminNavbar')
        <!--Admin  Navbar end -->


         <!-- page-body-wrapper Start -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial sidebar Start -->
            @include('admin.master.adminSidebar')
            <!-- partial -->

            <!-- start main content body -->
            @yield('content')
           
            <!--end main content body -->

        </div>
       
    </div>
    <!-- container-scroller -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2021 <a
                    href="#" target="_blank">SaS Ecommerce</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Developed by <a target="_blank" href="https://rayhan60611.github.io/mmrp_portfolio/#/">M M Rayhan Parvez</a>  <i
                    class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
    @include('admin.master.admin_scripts')
</body>

</html>