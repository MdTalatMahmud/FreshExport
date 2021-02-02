<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('includes.meta')

    @yield('page_meta')
    @yield('title')

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}" /> </head>
</head>
<body>

    @include('includes.nav.main')

    <div id="app">
        @yield('content')
    </div>

</body>
<!-- Scripts -->
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>
<script src="{{mix('js/manifest.js')}}"></script>
<script src="{{mix('js/vendor.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script></body>
</html>
