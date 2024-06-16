<!-- resources/views/dashboard/Layout/search.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 style="font-size: xx-large;">Welcome to our cinema</h1>
            <button class="movie-button">
                <h1 style="font-size: large;">Movie</h1>
                <img class="icon" src="{{ asset('img/search/Vector.png') }}" alt="Movie Roll" />
            </button>
        </div>
        <div class="search-container">
            <div class="search-box">
                <input class="search-input" type="text" id="search-query" placeholder="Enter movie name..."
                    required />
                <img class="icon" src="{{ asset('img/search/search.png') }}" alt="Search Icon" />
                <!-- Suggestions Container -->
                <div id="suggestions" class="suggestions-box"></div>
            </div>
            <div class="info">
                <img class="icon" src="{{ asset('img/search/schedule.png') }}" alt="Schedule Icon" />
                <h1 style="font-size: small;">Date 29/Jun/2024</h1>
            </div>
            <div class="info">
                <img class="icon" src="{{ asset('img/search/movie.png') }}" alt="Cinema Icon" />
                <h1 style="font-size: small;">Cinema England</h1>
            </div>
            <button class="search-button" id="search-button">Search</button>
        </div>
        <div id="search-results"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle typing in the search input for real-time suggestions
            $('#search-query').on('input', function() {
                const query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: "{{ route('dashboard.movies.search') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(response) {
                            $('#suggestions').html(response);
                        },
                        error: function(xhr) {
                            console.error(xhr);
                        }
                    });
                } else {
                    $('#suggestions').empty();
                }
            });

            // Handle the search button click for full search results
            $('#search-button').on('click', function() {
                const query = $('#search-query').val();
                $.ajax({
                    url: "{{ route('dashboard.movies.search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        $('#search-results').html(response);
                        $('#suggestions').empty(); // Clear suggestions
                    },
                    error: function(xhr) {
                        console.error(xhr);
                    }
                });
            });
        });
    </script>
</body>

</html>