@extends('movie')

@section('content')
<div>
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
                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
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
@endsection