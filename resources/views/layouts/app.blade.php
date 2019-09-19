<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--<title>{{ $title }}</title>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('icarus/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('icarus/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('icarus/css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('icarus/css/sigin.css') }}" rel="stylesheet">
    <link href="{{ asset('icarus/css/form-validation.css') }}" rel="stylesheet">
</head>
<body>

    @include('layouts.barra-topo')

    @include('layouts.menu-lateral')
    
    @yield('content')

    <script src="{{ asset('icarus/js/jquery-3.3.1.slim.min.js' ) }}"></script>
    <script src="{{ asset('icarus/js/popper.min.js' )}}" ></script>
    <script src="{{ asset('icarus/js/bootstrap.min.js' )}}" ></script>
    <script src="{{ asset('icarus/js/jquery-slim.min.js' )}}" ></script>
    <script>window.jQuery || document.write('<script src="{{ asset("icarus/js/jquery-slim.min.js")}}"<\/script>')</script>
    <script src="{{ asset('icarus/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('icarus/js/feather.min.js') }}"></script>
    <script src="{{ asset('icarus/js/chart.min.js') }}" ></script>
    <script src="{{ asset('icarus/js/dashboard.js') }}" ></script>
</body>
</html>
