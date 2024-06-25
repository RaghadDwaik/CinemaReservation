<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->double('ticketprice');
            $table->date('creation_date');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons');
            $table->foreignId('show_movie_id')->constrained('show__movies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
