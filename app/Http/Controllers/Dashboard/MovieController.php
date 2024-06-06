<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all(); // Change the variable name to $movies
        return view('dashboard.movies.index', compact('movies')); // Pass $movies to the view
    }
}


