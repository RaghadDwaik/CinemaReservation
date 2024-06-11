<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movfix - Online Movies & TV Shows Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
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
            background-color: #343a40; /* Dark background color */
            border: none; /* Remove border */
        }

        .btn-dark:hover {
            background-color: #212529; /* Darken background color on hover */
        }
    </style>
</head>

<body>

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
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#movies">Movies</a></li>
                <li><a href="{{route('dashboard.Layout.aboutus')}}">About Us</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
                <li><a href="{{ route('dashboard.Layout.coupon') }}">Coupon</a></li>

                @if (Route::has('register'))
                               <li><a href="{{ route('register') }}" class="join-us">Join Us</a></li>

                        @endif
                


                        @if(Auth::check())
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
            
            <!-- Logout Form -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
        </div>
    </div>
@else
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
        </div>
    </div>
@endif

                <li class="icon"><a href="{{ route('dashboard.Layout.search') }}"><i class="fas fa-search"></i></a></li>
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




        <section class="movie-area movie-bg" data-background="{{asset('img/bg/movie_bg.jpg')}}">
            <div class="container">
                <div class="row align-items-end mb-60">
                    <div class="col-lg-4">
                        <div class="section-title text-center text-lg-left">
                            <span class="sub-title">ONLINE STREAMING</span>
                            <h2 class="title">New Release Movies</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="movie-page-meta">
                            <div class="tr-movie-menu-active text-center">

                                <a href="{{route('dashboard.movies.animation')}}" class="btn">Animation</a>
                                <a href="{{ route('dashboard.movies.comedy') }}" class="btn">Comedy</a>
                                <a href="{{route('dashboard.movies.action')}}" class="btn">Action</a>
                                <a href="{{route('dashboard.movies.drama')}}" class="btn">Drama</a>

                            </div>

                            <form action="#" class="movie-filter-form ">
                                <select class="custom-select">
                                    <option value="1">Blueray</option>
                                    <option value="2">4k Movie</option>
                                    <option value="3">Hd Movie</option>
                             </select>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="main">
                    @yield('allMovies')
                </div>
            </div>
        </section>

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


