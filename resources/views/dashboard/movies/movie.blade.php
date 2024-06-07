<section class="movie-area movie-bg" data-background="{{ asset('img/bg/movie_bg.jpg') }}">
    <div class="container">
        <div class="row align-items-end mb-60">
            <div class="col-lg-6">
                <div class="section-title text-center text-lg-left">
                    <span class="sub-title">ONLINE STREAMING</span>
                    <h2 class="title">New Release Movies</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="movie-page-meta">
                    <div class="tr-movie-menu-active text-center">
                        <button class="active" data-filter="*">Animation</button>
                        <button class="" data-filter=".cat-one">Movies</button>
                        <button class="" data-filter=".cat-two">Romantic</button>
                    </div>
                    <form action="#" class="movie-filter-form">
                        <select class="custom-select">
                            <option selected>English</option>
                            <option value="1">Blueray</option>
                            <option value="2">4k Movie</option>
                            <option value="3">Hd Movie</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div class="row tr-movie-active">
            <!-- Fetching movie data from the table -->
            @foreach ($movies as $item)
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item movie-item-three mb-50">
                        <div class="movie-poster">
                            <img src="{{ asset($item->image) }}" alt="">
                            <ul class="overlay-btn">
                                <li class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch
                                        Now</a></li>
                                <li><a href="{{ route('dashboard.movies.show', $item->id) }}" class="btn">Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a
                                        href="{{ route('dashboard.movies.show', $item->id) }}">{{ $item->movie_name }}</a>
                                </h5>
                                <span class="date">{{ $item->release_date }}</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i>{{ $item->run_time }}</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i>{{ $item->rating }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <div class="pagination-wrap mt-30">
                    <nav>
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- movie-area  show all movie -->
 @extends('dashboard.movies.index')
 @section('allMovies')
 <div class="row tr-movie-active">
     <!-- //لجلب بيانات الافلام من التيبل -->
     @foreach ($movie as $item)
     <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">

         <div class="movie-item movie-item-three mb-50">
             <div class="movie-poster">
                 <img src="{{ asset($item -> image) }}" alt="">
                 <ul class="overlay-btn">
                     <li class="rating">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                     </li>
                     <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch
                             Now</a></li>
                     <li><a href="movie-details.html" class="btn">Details</a></li>
                 </ul>
             </div>
             <div class="movie-content">
                 <div class="top">
                     <h5 class="title"><a href="movie-details.html">{{ $item -> movie_name}}</a></h5>
                     <span class="date">{{ $item -> release_date}}</span>
                 </div>
                 <div class="bottom">
                     <ul>

                         <li>
                             <span class="duration"><i class="far fa-clock"></i>{{$item -> run_time}}</span>
                             <span class="rating"><i class="fas fa-thumbs-up"></i>{{$item -> rating}}</span>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

     </div>
     @endforeach
 </div>

 <div class="row">
     <div class="col-12">
         <div class="pagination-wrap mt-30">
             <nav>
                 <ul>
                     <li class="active"><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">Next</a></li>
                 </ul>
             </nav>
         </div>
     </div>
 </div>

 @endsection
