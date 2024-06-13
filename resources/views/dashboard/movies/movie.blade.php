<!-- movie-area-->
 @extends('dashboard.movies.index')
 @section('content')
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