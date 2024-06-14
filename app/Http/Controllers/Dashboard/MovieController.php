<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Show_Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movie = Movie::all(); // Ensure you are fetching all movies
        return view('dashboard.movies.all-movie', compact('movie')); // Pass the movies variable to the view
    }
    
// view movie for admin
    public function View(){

        $movies = Movie::all(); 
        return view('AdminPanel.ViewMovie', compact('movies')); 
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $showMovie = Show_Movie::all();
        return view('dashboard.movies.show', compact('movie' , 'showMovie'));
    }

    
    public function animation(){
        $movie = Movie::all();
        $anmation = "Animation";
        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation'));
    }

    public function comedy(){
        $movie = Movie::all();
        $anmation = "Comedy";
        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation'));
    }

    public function action(){
        $movie = Movie::all();
        $anmation = "Action";
        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation'));
    }

    public function drama(){
        $movie = Movie::all();
        $anmation = "Drama";
        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation'));
    }

    // Method to handle the AJAX search request
    public function ajaxSearch(Request $request)
        {
            $query = $request->input('query');
            $movies = Movie::where('movie_name', 'LIKE', "%{$query}%")->get();
            return view('dashboard.Layout.search-results', compact('movies'))->render();
        }




}
