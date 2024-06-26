<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <style>
        body {
            background-color: black; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #edd3b2;
            border-radius: 1rem;
            padding: 2rem;
            font-size: 1.125rem;
            color: #e2a147;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 80%;
            max-width: 1200px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
        }
        .movie-button {
            background-color: white;
            padding: 0.5rem 1rem;
            border-radius: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            border: none;
            cursor: pointer;
        }
        .icon {
            width: 1.25rem;
        }
        .search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 1rem 2rem;
            font-size: 1rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            gap: 1rem;
        }
        .search-box {
            border: 1px solid #e2a147;
            border-radius: 1.5rem;
            padding: 0.5rem 1rem;
            font-size: 1.125rem;
            color: black;
            display: flex;
            align-items: center;
            width: 40%;
        }
        .search-input {
            outline: none;
            border: none;
            flex-grow: 1;
        }
        .info {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }
        .date {
            border: solid #e2a147 1px;
        }
        .search-button {
            padding: 0.5rem 1rem;
            background-color: #e2a147;
            color: white;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
        }
    </style>
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
                <input class="search-input" type="text" id="search-query" placeholder="Enter movie name..." required />
                <img class="icon" src="{{ asset('img/search/search.png') }}" alt="Search Icon" />
                <!-- Suggestions Container -->
                <div id="suggestions" class="suggestions-box"></div>
            </div>
            <div class="info">
                <img class="icon" src="{{ asset('img/search/schedule.png') }}" alt="Schedule Icon" />
                <input type="date" class="date" id="search-date">
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
            $('#search-query').on('input', function() {
                const query = $(this).val();
                const date = $('#search-date').val();
                if (query.length > 2) {
                    $.ajax({
                        url: "{{ route('dashboard.movies.search') }}",
                        method: 'GET',
                        data: {
                            query: query,
                            date: date
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

            $('#search-button').on('click', function() {
                const query = $('#search-query').val();
                const date = $('#search-date').val();
                $.ajax({
                    url: "{{ route('dashboard.movies.search') }}",
                    method: 'GET',
                    data: {
                        query: query,
                        date: date
                    },
                    success: function(response) {
                        $('#search-results').html(response);
                        $('#suggestions').empty();
                    },
                    error: function(xhr) {
                        if (xhr.status === 404) {
                            $('#search-results').html('<p>There are no movies on this date.</p>');
                        } else {
                            console.error(xhr);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
