<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movfix - Online Movies & TV Shows Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/webstyles.css') }}">

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
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="{{ asset('img/preloader.svg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Coupon</a></li>
                <li><a href="#" class="join-us">Join Us</a></li>
                <li>
                    <select>
                        <option value="en">EN</option>
                        <option value="ar">Arabic</option>
                    </select>
                </li>
                <li class="icon"><a href="#"><i class="fas fa-user"></i></a></li>
                <li class="icon"><a href="#"><i class="fas fa-search"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>

        <!-- breadcrumb-area -->
        <section class="hero">
            <div class="movie-info">
                <h1>Harry Potter</h1>
                <p>An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family
                    and the terrible evil that haunts the magical world....
                    <span style="color:#EEC438">See more</span>
                </p>
                <div class="movie-details">
                    <span class="duration">1h 55m</span>
                    <span class="language">ENGLISH</span>
                </div>
                <div class="tags">
                    <span>Adventure</span>
                    <span>Family</span>
                    <span>Fantasy</span>
                </div>
                <button class="book-now">Book Now!</button>
            </div>

        </section>
        <!-- breadcrumb-area-end -->

        <!-- movie-area -->
        @include('dashboard.movies.movie')

        <!-- movie-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
            <div class="container">
                <div class="newsletter-inner-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="newsletter-content">
                                <h4>Trial Start First 30 Days.</h4>
                                <p>Enter your email to create or restart your membership.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="newsletter-form">
                                <input type="email" required placeholder="Enter your email">
                                <button class="btn">get started</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    @include('dashboard.movies.footer')
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
