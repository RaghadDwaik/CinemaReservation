<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [

        'code',
        'description',
        'discount',
    ];

      //Laravel will automatically link the id column of the Coupon table to the Coupon_id column of the reservation table.
      public function Reservations(){
        return $this->hasMany(reservation::class);
        
    }
}
