<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movfix </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/webstyles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/webstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
   
    <!-- Place favicon.ico in the root directory -->

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
</body>

</html>