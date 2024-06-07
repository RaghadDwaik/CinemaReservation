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
        <input class="search-input" type="text" placeholder="Enter movie name..." />
        <img class="icon" src="{{ asset('img/search/search.png') }}" alt="Search Icon" />
      </div>
      <div class="info">
        <img class="icon" src="{{ asset('img/search/schedule.png') }}" alt="Schedule Icon" />
        <h1 style="font-size: small;">Date 29/Jun/2024</h1>
      </div>
      <div class="info">
        <img class="icon" src="{{ asset('img/search/movie.png') }}" alt="Cinema Icon" />
        <h1 style="font-size: small;">Cinema England</h1>
      </div>
      <button class="search-button">Search</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>