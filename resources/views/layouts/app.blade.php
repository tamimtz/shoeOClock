<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shoe O' Clock</title>


    <link rel="icon" href="{{ url('/storage/images/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
        {{-- <script src="{{ asset('js/bootstrap5.bundle.js') }}" ></script> --}}

        {{-- collapse does not work if import more than one js --}}
       

        @include('layouts.nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
   
   


</body>
</html>
