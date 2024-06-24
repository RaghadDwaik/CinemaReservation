@if (!$movies->isEmpty())
    <ul class="suggestions-list"
        style="list-style-type: none; padding: 0; margin: 0; background-color: white; border: 1px solid #ddd; border-radius: 4px; max-width: 400px;">
        @foreach ($movies as $movie)
            <li
                style="padding: 8px 12px; cursor: pointer; border-bottom: 1px solid #ddd; display: flex; align-items: center;">
                <a href="{{ route('dashboard.movies.show', $movie->movie_id) }}"
                    style="text-decoration: none; color: black; flex-grow: 1;">
                    {{ $movie->film_release_date }} 
                </a>
            </li>
        @endforeach
    </ul>
@endif



@if (!$movieN->isEmpty())
    <ul class="suggestions-list"
        style="list-style-type: none; padding: 0; margin: 0; background-color: white; border: 1px solid #ddd; border-radius: 4px; max-width: 400px;">
        @foreach ($movieN as $Movie)
            <li
                style="padding: 8px 12px; cursor: pointer; border-bottom: 1px solid #ddd; display: flex; align-items: center;">
                <img src="{{ asset($Movie->image) }}" alt="{{ $Movie->movie_id }}"
                    style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                <a href="{{ route('dashboard.movies.show', $Movie->id) }}"
                    style="text-decoration: none; color: black; flex-grow: 1;">
                    {{ $Movie->movie_name }} 
                </a>
            </li>
        @endforeach
    </ul>
@endif



    

<!--@if ($movies->isEmpty())
    <p>There are no movies on this date.</p>
@else
    <ul class="suggestions-list"
        style="list-style-type: none; padding: 0; margin: 0; background-color: white; border: 1px solid #ddd; border-radius: 4px; max-width: 400px;">
        @foreach ($movies as $movie)
            <li
                style="padding: 8px 12px; cursor: pointer; border-bottom: 1px solid #ddd; display: flex; align-items: center;">
                <img src="{{ asset($movie->image) }}" alt="{{ $movie->movie_name }}"
                    style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                <a href="{{ route('dashboard.movies.show', $movie->id) }}"
                    style="text-decoration: none; color: black; flex-grow: 1;">
                    {{ $movie->movie_name }}
                </a>
            </li>
        @endforeach
    </ul>
   
@endif -->

