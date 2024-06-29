<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Movfix </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugin/style-confirmaition.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/webstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/webstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
 
	
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS for confirmation -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/plugin/animate.css')}}" />
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugin/bootstrap.css')}}" /> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/font-awesome.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/fonts.css')}}" />  
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/flaticon.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/owl.carousel.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/owl.theme.default.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/dl-menu.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/nice-select.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/magnific-popup.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/venobox.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('js/plugin/rs_slider/layers.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('js/plugin/rs_slider/navigation.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('js/plugin/rs_slider/settings.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/plugin/responsive.css')}}" />
	<!-- <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>   -->


    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


  
    <style>
    .btn-dark {
        background-color: #343a40;
        /* Dark background color */
        border: none;
        /* Remove border */
    }

    .btn-dark:hover {
        background-color: #212529;
        /* Darken background color on hover */
    }
    </style>
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="{{ asset('img/preloader.svg') }}" alt="">

                <img src="{{asset('img/preloader.svg')}}" alt="">

            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <div class="nav">
        @include('dashboard.Layout.navigation')
    </div>
    <!-- Scroll-top-end-->
    <main>
        @yield('content')
    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    @include('dashboard.Layout.footer')
    <!-- footer-area-end -->

    <!-- JS here -->

    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
<!-- js to confirmation screen -->
    <script src="{{ asset('js/js_/jquery_min.js') }}"></script>
	<script src="{{ asset('js/js_/modernizr.js') }}"></script>
	<script src="{{ asset('js/js_/bootstrap.js') }}"></script>
	<script src="{{ asset('js/js_/owl.carousel.js') }}"></script>
	<!-- <script src="{{ asset('js/js_/jquery.dlmenu.js') }}"></script> -->
	<script src="{{ asset('js/js_/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/js_/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('js/js_/jquery.magnific-popup.js') }}"></script>
	<script src="{{ asset('js/js_/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('js/js_/venobox.min.js') }}"></script>
	<script src="{{ asset('js/js_/smothscroll_part1.js') }}"></script>
	<script src="{{ asset('js/js_/smothscroll_part2.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.addon.snow.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('js/js_/plugin/rs_slider/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('js/js_/custom.js') }}"></script>
    @stack('styles')
</body>

</html>