<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('master.styles')
    <title>
        @yield('title' , 'SaS Ecommerce')
    </title>
    <link rel="shortcut icon" href="{{asset('images/SaS.png')}}" />
</head>

<body>
    <div class="wrapper">

        @include('master.navbar')

        @yield('content')

        @include('master.footer')
    </div>



    @include('master.scripts')
</body>

</html>