<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Movie;
use App\Models\Reservation;
use App\Models\Show_Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {

        $movie = Movie::all(); // Ensure you are fetching all movies
        $movieWithId = Movie::find(3); // Replace '1' with the ID of the specific movie you want to display
        if (!$movieWithId) {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        return view('dashboard.movies.all-movie', compact('movie', 'movieWithId')); // Pass the movies variable to the view
    }

    // view movie for admin
    public function View()
    {

        $movies = Movie::all();
        return view('AdminPanel.ViewMovie', compact('movies'));
    }



    public function animation()
    {
        $movie = Movie::all();
        $movieWithId = Movie::find(3); // Replace '1' with the ID of the specific movie you want to display
        if (!$movieWithId) {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        $anmation = "Animation";

      
        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation','movieWithId'));

    }

    public function comedy()
    {
        $movie = Movie::all();
        $movieWithId = Movie::find(3); // Replace '1' with the ID of the specific movie you want to display
        if (!$movieWithId) {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        $anmation = "Comedy";

        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation','movieWithId'));

    }

    public function action()
    {
        $movie = Movie::all();
        $movieWithId = Movie::find(3); // Replace '1' with the ID of the specific movie you want to display
        if (!$movieWithId) {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        $anmation = "Action";

        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation','movieWithId'));

    }

    public function drama()
    {
        $movie = Movie::all();
        $movieWithId = Movie::find(3); // Replace '1' with the ID of the specific movie you want to display
        if (!$movieWithId) {
            return redirect()->back()->with('error', 'Movie not found.');
        }
        $anmation = "Drama";

        return view('dashboard.movies.types-movies' , compact('movie' , 'anmation','movieWithId'));

    }

   
    public function ajaxSearch(Request $request)

        {
            $query = $request->input('query');
            $date = $request->input('date');
        
            $movies = Movie::where('movie_name', 'LIKE', "%{$query}%");
        
            if ($date) {
                $movies->whereHas('Show_Movies', function ($query) use ($date) {
                    $query->whereDate('film_release_date', $date);
                });
            }
        
            $movies = $movies->get();
        
            
            return view('dashboard.Layout.search-results', compact('movies'))->render();
        }
        
    

    public function searchSuggestions(Request $request)
    {
        $query = $request->input('query');
        $movies = Movie::where('movie_name', 'LIKE', "%{$query}%")->get(['id', 'movie_name', 'image']);
        return response()->json($movies);

        
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $showMovies = Show_Movie::where('movie_id', $id)->get();
        return view('dashboard.movies.show', compact('movie', 'showMovies'));
    }

    // payment function

    public function payment($id)
    {
        $coupon = Coupon::all();
        $show_Movie = Show_Movie::findOrFail($id);
        return view('dashboard.movies.payment', compact('coupon', 'show_Movie'));
    }

    public function confirmation_payment($id)
    {

        $Show_Movie = Show_Movie::findOrFail($id);
        // Assuming movie_id is the foreign key
        $Movie = Movie::findOrFail($Show_Movie->movie_id);
        // Retrieve the latest reservation related to this Show_Movie
        $Reservation = Reservation::where('show_movie_id', $Show_Movie->id)
            ->latest()
            ->first();

        return view('dashboard.movies.confirmation-screen', compact('Reservation', 'Movie', 'Show_Movie'));
    }
}
