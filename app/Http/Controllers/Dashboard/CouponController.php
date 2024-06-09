<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
{
    $coupon = Coupon::all();
    return view('dashboard.Layout.coupon', compact('coupon'));
}
}
