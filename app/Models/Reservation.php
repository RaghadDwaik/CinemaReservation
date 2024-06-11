<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'ticketprice',
        'creation_date',
        'customer_id',
        'show_movie_id',
    ];

    public function customers(){
        return $this->belongsTo(customer::class);
    }

    public function coupons(){
        return $this->belongsTo(Coupon::class);
    }
    public function show__movies(){
        return $this->belongsTo(Show_Movie::class);
    }
}