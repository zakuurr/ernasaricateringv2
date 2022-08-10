<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Erna Sari Catering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{ asset('/frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss','resources/js/app.js']) --}}
    @livewireScripts
    <style>
        a:hover{
            color: black;
        }
    </style>
</head>
<body>
    <div id="app" class="site-wrap">
        @livewire('header')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts

<script type="module">
    import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
</script>

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

<script src="{{ asset('/')}}frontend/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/')}}frontend/js/jquery-ui.js"></script>
<script src="{{ asset('/')}}frontend/js/popper.min.js"></script>
<script src="{{ asset('/')}}frontend/js/bootstrap.min.js"></script>
<script src="{{ asset('/')}}frontend/js/owl.carousel.min.js"></script>
<script src="{{ asset('/')}}frontend/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/')}}frontend/js/aos.js"></script>

<script src="{{ asset('/')}}frontend/js/main.js"></script>

</body>
</html>
