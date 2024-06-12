<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_name',
        'email',
        'password',
    ];
    //Laravel will automatically link the id column of the Customer table to the Customer_id column of the reservation table.
    public function reservations(){
        return $this->hasMany(Reservation::class);
        
    }
}