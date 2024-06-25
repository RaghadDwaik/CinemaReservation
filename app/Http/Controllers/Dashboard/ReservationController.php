<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Movie;
use App\Models\Reservation;
use App\Models\Show_Movie;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // A function to create reservation 
    public function create($id)
    {
        $Show_Movie = Show_Movie::findOrFail($id);
        $Coupon = Coupon::all();
        // $User = User::all();
        
        return view('dashboard.movies.payment', compact('Show_Movie' , 'Coupon'));
    }


    // A function to store reservation data
    public function store(Request $request , $id)
    {

        Reservation::create(
            $request->all()
        );
        //Update the value of the Number of available seats field
        $showMovie = Show_Movie::findOrFail($id);
        $oldValue = $showMovie->available_seat; 
        $newValue = $oldValue - 1;
        $showMovie->update(['available_seat' => $newValue]);
    
      
        return redirect()->route('movies.confirmationScreen' ,['id' => $id]);
    }

}