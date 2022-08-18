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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.theme.default.min.css')}}">

    <script src="https://kit.fontawesome.com/7e01dd3eec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @livewireScripts
    <style>
        a:hover{
            color: black;
        }
        .btn:hover{
            color: black;
        }
        :root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}


.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card-image-top {
 width: 100%;
 height: 100%;
}

.card-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-radius: calc(var(--curve) * 1px);
  background-color: var(--surface-color);
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card-overlay {
  transform: translateY(0);
}

.card-header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card-arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;
  z-index: 1;
}

.card-arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}

.card:hover .card-header {
  transform: translateY(0);
}

.card-thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.card-title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card-tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";
  font-size: .8em;
  color: #D7BDCA;
}

.card-status {
  font-size: .8em;
  color: #D7BDCA;
}

.card-description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
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

    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script type="module" defer>
    import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer></script>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.x/dist/alpine.min.js" defer></script>

<script src="{{ asset('/')}}frontend/js/jquery-3.3.1.min.js" defer></script>
<script src="{{ asset('/')}}frontend/js/jquery-ui.js" defer></script>
<script src="{{ asset('/')}}frontend/js/popper.min.js" defer></script>
<script src="{{ asset('/')}}frontend/js/bootstrap.min.js" defer></script>
<script src="{{ asset('/')}}frontend/js/owl.carousel.min.js" defer></script>
<script src="{{ asset('/')}}frontend/js/jquery.magnific-popup.min.js" defer></script>
<script src="{{ asset('/')}}frontend/js/aos.js" defer></script>

<script src="{{ asset('/')}}frontend/js/main.js" defer></script>

</body>
</html>
