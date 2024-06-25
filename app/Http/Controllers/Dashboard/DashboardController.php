<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Coupon;
use App\Models\Reservation;
use App\Models\Show_Movie;


use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        return view ('AdminPanel.AdminDashboard');

    }

    public function user(){
        $users = User::all();
        return view ('AdminPanel.ViewUser', compact('users'));

    }

    public function coupon(){
        $coupon = Coupon::all();
        return view ('AdminPanel.ViewCoupons', compact('coupon'));

    }
    public function addUser()
    {
        return view('AdminPanel.AddUser');
    }

    public function addMovie()
    {
        return view('AdminPanel.AddMovie');
    }

    public function store(Request $request)
    {
        User::create(
            $request->all()
        );
        session()->flash('success', 'User created successfully');
        return redirect()->route('AdminPanel.ViewUser');

    }

    public function storeM(Request $request)
    {
        Movie::create(
            $request->all()
        );
        session()->flash('success', 'Movie created successfully');
        return redirect()->route('AdminPanel.ViewMovie');

    }
    public function editMovie(Movie $movie)
    {
        $types = ['Action', 'Comedy', 'Drama', 'Animation']; 
        return view('AdminPanel.EditMovie',compact('movie', 'types'));
    }

   

    public function updateMovie(Request $request , Movie $movie)
    {
        $movie->update(
            $request->all()
        );
        session()->flash('update', 'Movie updated successfully');
        return redirect()->route('AdminPanel.ViewMovie');


    }


    public function editUser(User $user)
    {
        return view('AdminPanel.EditUser',compact('user'));
    }

    
    public function profile()
    {
        $user = Auth::user();
        return view('AdminPanel.Profile',compact('user'));
    }

   

    public function updateProfile(Request $request, User $user)
{
    $user->update(
        $request->all()
    );
    session()->flash('update', 'Profile updated successfully');
    return redirect()->route('AdminPanel.Profile');
}

    

   

    public function updateUser(Request $request , User $user)
    {
        $user->update(
            $request->all()
        );
        session()->flash('update', 'User updated successfully');
        return redirect()->route('AdminPanel.ViewUser');


    }
    public function deleteM(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('AdminPanel.ViewMovie')->with('success', 'Movie deleted successfully');
    }
    public function deleteU(User $user)
    {
        $user->delete();
        return redirect()->route('AdminPanel.ViewUser')->with('success', 'user deleted successfully');
    }

    public function MultiAuth()
    {
       
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                return view('dashboard.movies.index');
            } else if ($usertype == 'admin') {
                return view('AdminPanel.AdminDashboard');
            }
        }
    }

    public function editCoupon(Coupon $coupon)
    {
        return view('AdminPanel.EditCoupon',compact('coupon'));
    }

    public function updatec(Request $request , Coupon $coupon)
    {
        $coupon->update(
            $request->all()
        );
        session()->flash('update', 'Coupon updated successfully');
        return redirect()->route('AdminPanel.ViewCoupons');


    }

    public function deleteC(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('AdminPanel.ViewCoupons')->with('success', 'Coupon deleted successfully');
    }

    public function deleteR(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('AdminPanel.ViewReservation')->with('success', 'Reservation deleted successfully');
    }

    public function addCoupon()
    {
        return view('AdminPanel.AddCoupon');
    }

    public function storeC(Request $request)
    {
        Coupon::create(
            $request->all()
        );
        session()->flash('success', 'Coupon created successfully');
        return redirect()->route('AdminPanel.ViewCoupons');

    }

    public function ViewR(){

        $reservation = Reservation::all(); 
        return view('AdminPanel.ViewReservation', compact('reservation')); 
    }

    public function addR()
    {
        $reservation = Reservation::all(); 
        $movie = Movie::all(); 
        $show=Show_Movie::all();
        return view('AdminPanel.AddReservation',compact('reservation','movie','show'));
    }

    public function storeR(Request $request)
    {
        Reservation::create(
            $request->all()
        );
        session()->flash('success', 'Reservation created successfully');
        return redirect()->route('AdminPanel.ViewReservation');

    }

    public function editRes(Reservation $reservation)
    {
        $users = User::all(); // Assuming you have a User model
        $coupons = Coupon::all(); // Assuming you have a Coupon model
        return view('AdminPanel.EditRes', compact('reservation', 'users', 'coupons'));
    }
    

    public function updateR(Request $request , Reservation $reservation)
    {
        $reservation->update(
            $request->all()
        );
        session()->flash('update', 'Reservation updated successfully');
        return redirect()->route('AdminPanel.ViewReservation');


    }
   
}


