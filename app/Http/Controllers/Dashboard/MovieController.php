<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Movie;
use App\Models\Show_Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movie = Movie::all(); // Ensure you are fetching all movies
        $movieWithId = Movie::find(3); // Replace '1' with the ID of the specific movie you want to display
        if (!$movieWithId) {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        return view('dashboard.movies.all-movie', compact('movie' ,'movieWithId')); // Pass the movies variable to the view
    }
    
// view movie for admin
    public function View(){

        $movies = Movie::all(); 
        return view('AdminPanel.ViewMovie', compact('movies')); 
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

   
    public function ajaxSearch(Request $request)
    {
        $date = $request->input('date');
        $query = $request->input('query');
        $movies = [];
        $movieN = [];
    
        if ($date) {
            $movies = Show_Movie::where('film_release_date', 'LIKE', "%{$date}%")->get();
        }
    
        if ($query) {
            $movieN = Movie::where('movie_name', 'LIKE', "%{$query}%")->get();
        }
    
        return view('dashboard.Layout.search-results', compact('movies', 'movieN'))->render();
    }
    
    public function searchSuggestions(Request $request)
    {
        $date = $request->input('date');
        $query = $request->input('query');
        $movies = [];
        $movieN = [];
    
        if ($date) {
            $movies = Show_Movie::where('film_release_date', 'LIKE', "%{$date}%")->get(['movie_id']);
        }
    
        if ($query) {
            $movieN = Movie::where('movie_name', 'LIKE', "%{$query}%")->get(['movie_name']);
        }
    
        return response()->json(['movies' => $movies, 'movieN' => $movieN]);
    }
    

    
    
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $showMovies = Show_Movie::where('movie_id', $id)->get();
        return view('dashboard.movies.show', compact('movie', 'showMovies'));
    }


    // payment function
  
    public function payment($id ){
        $coupon = Coupon::all();
        $show_Movie = Show_Movie::findOrFail($id);
        return view('dashboard.movies.payment' , compact('coupon' , 'show_Movie'));

        
    }

    public function confirmation_payment($id){

        // Retrieve the Show_Movie instance by its ID
        $Show_Movie = Show_Movie::findOrFail($id);
       
        // Assuming movie_id is the foreign key
        $Movie = Movie::findOrFail($Show_Movie->movie_id);
        return view('dashboard.movies.confirmation-screen', compact('Show_Movie' , 'Movie'));

    }
  


}