 <!-- movie-area  show all movie -->
 @extends('dashboard.movies.index')
 @section('content')

 <!-- breadcrumb-area -->
 <section class="hero">
            <div class="movie-info" id="{{ $movieWithId->id}}">
                <h1>{{ $movieWithId->movie_name }}</h1>
                <p>{{ $movieWithId->description }}
                </p>
                <div class="movie-details">
                    <span class="duration">{{ $movieWithId->run_time }}</span>
                    <span class="language">{{ $movieWithId->language }}</span>
                </div>
                <div class="tags">
                    <span>{{ $movieWithId->type }}</span>
                <a href="{{route('dashboard.movies.show',$movieWithId->id)}}" class="btn">Show Details</a>
                </div>

        </section>
 <!-- breadcrumb-area-end -->

 <!-- movie-area -->

 <section class="movie-area movie-bg" data-background="{{asset('img/bg/movie_bg.jpg')}}">
     <div class="container">
        
         @if (session('success'))
         <div class="alert alert-success">
             {{ session('success') }}
             @endif
         </div>


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
             <div class="row tr-movie-active">
                 <!-- //لجلب بيانات الافلام من التيبل -->
                 @foreach ($movie as $item)
                 <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two " id="movies">

                     <div class="movie-item movie-item-three mb-50">
                         <div class="movie-poster">
                         @if (file_exists(public_path('images/' . $item->image)))
        <img src="{{ asset('images/' . $item->image) }}"  class="img-thumbnail">
    @else
    <img src="{{ asset($item->image) }}" 
    class="img-fluid rounded shadow-lg">
    @endif
                             <ul class="overlay-btn">
                                 <li class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>

                                 </li>

                                 <li><a href="{{$item->trailer_url}}" class="popup-video btn">Watch Now</a></li>

                                 {{-- <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch
                             Now</a></li> --}}

                                 <li><a href="{{route('dashboard.movies.show',$item->id)}}" class="btn">Details</a></li>
                             </ul>
                         </div>
                         <div class="movie-content">
                             <div class="top">
                                 <h5 class="title"><a
                                         href="{{route('dashboard.movies.show',$item->id)}}">{{ $item->movie_name}}</a>
                                 </h5>
                                 <span class="date">{{ $item->release_date}}</span>
                             </div>
                             <div class="bottom">
                                 <ul>

                                     <li>
                                         <span class="duration"><i class="far fa-clock"></i>{{$item->run_time}}</span>
                                         <span class="rating"><i class="fas fa-thumbs-up"></i>{{$item->rating}}</span>
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
     </div>
 </section>

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

 <!-- movie-area-end -->





 @endsection