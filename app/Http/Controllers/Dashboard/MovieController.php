<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movie_info = Movie::all();
        return view('dashboard.movies.index' , compact('movie_info'));
    }
}
