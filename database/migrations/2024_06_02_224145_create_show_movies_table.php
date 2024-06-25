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
        Schema::create('show__movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->date('film_release_date');
            $table->time('show_time');
            $table->integer('sinema_hall_no');
            $table->integer('total_seat');
            $table->integer('available_seat');
            $table->integer('available_age');
            $table->timestamps();

            $table->decimal('price', 8, 2); 

            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show__movies');
    }
};
