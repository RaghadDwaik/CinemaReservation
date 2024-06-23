@extends('dashboard.movies.index')
@section('content')

<main>
    <!-- movie-details-area -->
    <section class="movie-details-area1">
        <div class="container">
            <div class="movie-details-content1">
                <div>
                    <img src="{{ asset($movie->image) }}" alt="{{ $movie->movie_name }}" class="img-fluid rounded shadow-lg">
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
                        <a href="{{ $movie->trailer_url }}" class="btn-watch-trailer btn btn-lg" target="_blank"><i class="fas fa-play"></i> Watch Trailer</a>
                        <a href="#" class="btn-book-now btn btn-lg"><i class="fas fa-ticket-alt"></i> Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->
</main>

<!-- show time area -->


<section class="movie-area movie-bg .movie-details-content" data-background="{{asset('img/bg/movie_bg.jpg')}}">
    <div class="container">
        <div class="row date__container">
            <div class="col">
                @php
                $date = date('1600-1-1');
                $Current_date = now()->format('Y-m-d');
                $day = now()->format('l');
                $id_movie = 0;
                $hall_no = 0;
                @endphp

                @foreach($showMovies as $item)
                @if($item->movie_id == $movie->id && $item->film_release_date >= $Current_date)
                @if($item->film_release_date !== $date)
                <h2 href="#" class="col badge badge-date-light">{{ $item->film_release_date }}</h2>
                @php
                $date = $item->film_release_date;
                $id_movie = 1;
                @endphp
                @endif
                <div class="contant col">
                    @if($item->sinema_hall_no !== $hall_no)
                    <h3 class="h3-hall-no">Hall : {{ $item->sinema_hall_no }}</h3>
                    @php
                    $hall_no = $item->sinema_hall_no;
                    @endphp
                    @endif
                    <div class="col">

                    
                   <a href="{{route('dashboard.movies.paymant' , $item->id )}}" class="badge badge-primary show-time">{{$item->show_time}}</a>

                    </div>
                </div>
                @endif
                @endforeach
                @if($id_movie == 0)<h2 href="#" class="col badge badge-date-light">No Show Time</h2>@endif
            </div>
        </div>
    </div>
</section>
<!-- show time area end -->

@endsection

@push('styles')
<style>
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

.badge {
    font-size: 33px;
    border-radius: 0px;
    padding: 0.25em 1.4em;
    font-weight: 600;
}

.show-time {
    margin-right: 10px;
    font-size: 19px;
    margin: 10px;
    border-radius: 5px;
}

.badge-primary {
    color: #fff;
    background-color: rgba(44, 44, 44, 0.5);
    border: 1px solid #007bff;
}
</style>
@endpush
