<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Movie Details - Movfix</title>
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
    <style>
        .title,
        .more-details-title {
            color: #EEC438;
        }

        .btn-watch-trailer,
        .btn-book-now {
            background-color: transparent;
            color: white;
            border: 2px solid #228EE5;
            border-radius: 10px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-watch-trailer:hover,
        .btn-book-now:hover {
            background-color: rgba(44, 44, 44, 0.5);
            color: #EEC438;
        }

        .movie-details-area {
            padding: 60px 0;
            background-image: url('{{ asset('img/bg/movie_details_bg.jpg') }}');
            /* Image background */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .movie-details-content {
            background-color: rgba(44, 44, 44, 0.5);
            padding: 20px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            /* Center the image vertically */
            margin-top: 80px;
        }

        .movie-details-info {
            margin-left: 20px;
        }

        .movie-details-content img {
            margin-bottom: 20px;
            max-height: 500px;
            /* Ensure the image doesn't get too large */
        }

        .more-details-title {
            color: #EEC438;
            font-size: 24px;
            margin-top: 20px;
            text-align: center;
        }

        .list-unstyled li {
            margin-bottom: 10px;
            /* Add spacing between list items */
        }

        .movie-details-info p {
            margin-bottom: 20px;
            /* Add space below the description */
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="{{ route('dashboard.movies.index') }}">Home</a></li>
                <li><a href="{{ route('dashboard.movies.index') }}">Movies</a></li>
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
        <!-- movie-details-area -->
        <section class="movie-details-area">
            <div class="container">
                <div class="movie-details-content">
                    <div>
                        <img src="{{ asset($movie->image) }}" alt="{{ $movie->movie_name }}"
                            class="img-fluid rounded shadow-lg">
                    </div>
                    <div class="movie-details-info">
                        <h2 class="title display-4 font-weight-bold">{{ $movie->movie_name }}</h2>
                        <p class="lead">{{ $movie->description }}</p>
                        <ul class="list-unstyled">
                            <li><span class="font-weight-bold">Release Date:</span> {{ $movie->release_date }}</li>
                            <li><span class="font-weight-bold">Runtime:</span> {{ $movie->run_time }}</li>
                            <li><span class="font-weight-bold">Rating:</span> {{ $movie->rating }}</li>
                        </ul>
                        <div class="mt-4">
                            <a href="#" class="btn btn-watch-trailer btn-lg"><i class="fas fa-play"></i> Watch
                                Trailer</a>
                            <a href="#" class="btn btn-book-now btn-lg"><i class="fas fa-ticket-alt"></i> Book
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <h3 class="more-details-title font-weight-bold">More Details</h3>
                    <p>{{ $movie->long_description }}</p>
                </div>
            </div>
        </section>
        <!-- movie-details-area-end -->
    </main>
    <!-- main-area-end -->

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
