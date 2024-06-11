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
            $table->foreignId('movie_id')->constrained('movies');   //Created a foreign key constraint on this column referencing the "id" column of the movies table.
            $table->date('film_release_date'); // format('dd, mm, YY');
            $table->time('show_time');   //format('H:i');
            $table->integer('sinema_hall_no');
            $table->integer('total_seat');
            $table->integer('available_seat');
            $table->integer('available_age');
            $table->timestamps();
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
