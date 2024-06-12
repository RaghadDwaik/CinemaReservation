 <!-- movie-area  show all movie -->
 @extends('dashboard.movies.movie')
 @section('allMovies')
 <div class="row tr-movie-active">
     <!-- //لجلب بيانات الافلام من التيبل -->
     @foreach ($movie as $item)
     <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two " id="movies">

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
                     <li><a href="{{route('dashboard.movies.show',$item->id)}}" class="btn">Details</a></li>
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