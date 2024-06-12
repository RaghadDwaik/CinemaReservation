<!-- search-area-->
@extends('dashboard.movies.index')
@section('content')
<!-- resources/views/dashboard/Layout/search.blade.php -->


<div class="search-area">
    <div class="container-search">
        <div class="header-search">
            <h1 style="font-size: xx-large; color: #e2a147;">Welcome to our cinema</h1>
            <button class="movie-button">
                <h1 style="font-size: large; color: black;">Movie</h1>
                <img class="icon" src="{{ asset('img/search/Vector.png') }}" alt="Movie Roll" />
            </button>
        </div>
        <div class="search-container">
            <div class="search-box">
                <input class="search-input" type="text" id="search-query" placeholder="Enter movie name..." required />
                <img class="icon" src="{{ asset('img/search/search.png') }}" alt="Search Icon" />
            </div>
            <div class="info">
                <img class="icon" src="{{ asset('img/search/schedule.png') }}" alt="Schedule Icon" />
                <h1 style="font-size: small; color: #e2a147;">Date 29/Jun/2024</h1>
            </div>
            <div class="info">
                <img class="icon" src="{{ asset('img/search/movie.png') }}" alt="Cinema Icon" />
                <h1 style="font-size: small; color: #e2a147;">Cinema England</h1>
            </div>
            <button class="search-button" id="search-button">Search</button>
        </div>
        <div id="search-results"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
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
                    // Apply inline styles for testing
                    $('.description').css({
                        'color': '#FFA500',
                        'font-size': '16px',
                        'line-height': '1.5'
                    });
                },
                error: function(xhr) {
                    console.error(xhr);
                }
            });
        });
    });
    </script>
</div>