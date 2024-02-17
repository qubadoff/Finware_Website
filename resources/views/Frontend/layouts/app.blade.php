<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ settings()->meta_description }}">
    <!-- fav icon -->
    <link rel="icon" href="{{ url('/') }}/storage/{{ settings()->favicon }}">

    <!-- bootstarp css file -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">

    <!-- aos.css file -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/aos.css">

    <!-- fancybox css file -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/jquery.fancybox.min.css">

    <!-- owl carousel css file -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.theme.default.min.css">

    <!--  toasts file     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- main css file -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
    <title> @yield('title') </title>
</head>

<body class="home-1">

<!-- start preLoader -->
<div id="preloader">
    <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
        <defs>
            <radialGradient id="mainGrad" cx="400" cy="300" fx="400" fy="300" r="100" gradientUnits="userSpaceOnUse">
                <stop offset=".68" stop-color="#21df51" />
                <stop offset=".72" stop-color="#3add63" />
                <stop offset=".77" stop-color="#4fdd73" />
                <stop offset=".82" stop-color="#66db83" />
                <stop offset=".88" stop-color="#7cd893" />
                <stop offset=".93" stop-color="#95d8a6" />
                <stop offset=".99" stop-color="#bde6c7" />
                <stop offset="1" stop-color="#e3f1e7" />
            </radialGradient>
        </defs>
        <circle id="fillDot" cx="400" cy="300" fill="#21df51" r="100" />
        <circle id="gradDot" cx="400" cy="300" fill="url(#mainGrad)" r="100" />
    </svg>
</div>
<!-- end preLoader -->

<!-- start scroll to top button -->
<div id="progress">
    <span id="progress-value"><i class="bi bi-arrow-up-short"></i></span>
</div>
<!-- end scroll to top button -->


@include('Frontend.layouts.includes.header')

@yield('content')

@include('Frontend.layouts.includes.footer')

<!--  JQuery file     -->
<script src="{{ asset('/') }}assets/js/jquery-3.6.1.min.js"></script>

<!-- bootstrap min js -->
<script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>

<!--  toasts file     -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!--  owl carousel    -->
<script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script>

<!-- aos file    -->
<script src="{{ asset('/') }}assets/js/aos.js"></script>

<!-- gsap file    -->
<script src="{{ asset('/') }}assets/js/gsap.min.js"></script>

<!--  counter     -->
<script src="{{ asset('/') }}assets/js/jquery.counterup.min.js"></script>
<script src="{{ asset('/') }}assets/js/jquery.waypoints.js"></script>

<!-- particles js file  -->
<script src="{{ asset('/') }}assets/js/particles.min.js"></script>

<!-- jquery isotope file -->
<script src="{{ asset('/') }}assets/js/isotope.min.js"></script>

<!-- jquery fancybox file -->
<script src="{{ asset('/') }}assets/js/jquery.fancybox.min.js"></script>

<!--  main js file  -->
<script src="{{ asset('/') }}assets/js/main.js"></script>


</body>
</html>
