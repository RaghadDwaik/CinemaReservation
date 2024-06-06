<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movie = Movie::all();
        return view('dashboard.movies.movie' , compact('movie'));
    }

    public function animation(){
        $movie = Movie::all();
        $anmation = "Animation";
        return view('dashboard.movies.allmovies' , compact('movie' , 'anmation'));
    }

    public function comedy(){
        $movie = Movie::all();
        $anmation = "Comedy";
        return view('dashboard.movies.allmovies' , compact('movie' , 'anmation'));
    }

    public function action(){
        $movie = Movie::all();
        $anmation = "Action";
        return view('dashboard.movies.allmovies' , compact('movie' , 'anmation'));
    }

    public function drama(){
        $movie = Movie::all();
        $anmation = "Drama";
        return view('dashboard.movies.allmovies' , compact('movie' , 'anmation'));
    }

    
    
}
