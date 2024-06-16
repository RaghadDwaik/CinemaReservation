@if (!$movies->isEmpty())
    <ul class="suggestions-list" style="list-style-type: none; padding: 0; margin: 0;">
        @foreach ($movies as $movie)
            <li style="padding: 8px 12px; cursor: pointer; border-bottom: 1px solid #ddd;">
                <a href="{{ route('dashboard.movies.show', $movie->id) }}" style="text-decoration: none; color: black;">
                    {{ $movie->movie_name }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
