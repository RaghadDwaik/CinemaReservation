<!-- resources/views/dashboard/movies/partials/search-results.blade.php -->

@if ($movies->isEmpty())
    <p>No movies found.</p>
@else
    <div class="movie-list">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->description }}</p>
                <!-- Link to movie details page -->
                <a href="{{ route('dashboard.movies.show', $movie->id) }}">Details</a>
            </div>
        @endforeach
    </div>
@endif
