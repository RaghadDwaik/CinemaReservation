<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'holdername' => 'required|string|max:255',
            'cardno' => 'required|string|min:16|max:19',
            'exp' => 'required|string|min:5|max:5',
            'cvcpwd' => 'required|string|min:3|max:3',
            'coupon' => 'nullable|numeric',
            'ticketPrice' => 'required|numeric',
            'movieId' => 'required|integer',
        ]);

        // Retrieve the ticket price from the form
        $ticketPrice = $request->ticketPrice;

        // Calculate the final price after applying the coupon discount
        $discount = $request->coupon;
        $coupon = Coupon::where('discount', $discount)->first();
        $couponId = $coupon ? $coupon->id : null;
        $finalPrice = $coupon ? $ticketPrice - ($ticketPrice * ($discount / 100)) : $ticketPrice;

        // Create the reservation record
        Reservation::create([
            'ticketprice' => $finalPrice,
            'creation_date' => now(),
            'user_id' => auth()->user()->id,
            'coupon_id' => $couponId,
            'show_movie_id' => $request->movieId, // Assuming show_movie_id is movieId for simplicity
        ]);

        // Redirect or return response after payment processing
        return redirect()->route('dashboard.movies.movie')->with('success', 'Payment processed successfully!');
    }
}

