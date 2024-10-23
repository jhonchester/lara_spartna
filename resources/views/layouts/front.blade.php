<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--meta seo--}}
    @yield('meta')
    {{--title--}}
    @yield('title')
    {{--style--}}
    @yield('style')

    




    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 text-gray-900 antialiased">
     {{--navs--}}
    @include('layouts.nav')
    {{--content--}}
    @yield('content')


    {{--script--}}
    @yield('script')
    {{--foooter--}}
    @include('layouts.footer')
</body>
</html>