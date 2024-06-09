<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
{
    $coupon = Coupon::all();
    return view('coupon.index', compact('coupon'));
}
}
