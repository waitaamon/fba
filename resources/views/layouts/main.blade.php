<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.4.0/css/lightcase.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <title>Focus Business Advisory</title>
</head>
<body>

<div id="app">

    @include('layouts.includes._loader')


    @include('layouts.includes._nav')


    @yield('content')


    @include('layouts.includes._footer')

</div>

<!-- Jarallax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.7.3/jarallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!-- Js -->
<script src="{{ URL::asset('js/app.js') }}"></script>

@yield('scripts')
<script>
    new WOW().init();
</script>
</body>

</html>