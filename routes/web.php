<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\MovieController;
use App\Http\Controllers\Dashboard\CouponController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



// details of each movie
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('dashboard.movies.show');

Route::get('/dashboard/Layout/coupon', [CouponController::class, 'index'])->name('dashboard.Layout.coupon');


//home
Route::get('/',[MovieController::class,'index'])->name('dashboard.movies.index');

//Type of Movies
Route::get('dashboard/movies/animation',[MovieController::class,'animation'])->name('dashboard.movies.animation');
Route::get('dashboard/movies/comedy',[MovieController::class,'comedy'])->name('dashboard.movies.comedy');
Route::get('dashboard/movies/action',[MovieController::class,'action'])->name('dashboard.movies.action');
Route::get('dashboard/movies/drama',[MovieController::class,'drama'])->name('dashboard.movies.drama');

//view after login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'veri
fied'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





//search view

Route::get('dashboard/Layout/search', function () {
    return view('dashboard.Layout.search');
})->name('dashboard.Layout.search');

//AboutUS view
Route::get('dashboard/Layout/aboutus', function () {
    return view('dashboard.Layout.aboutus');
})->name('dashboard.Layout.aboutus');

Route::get('dashboard/Layout/adminpage',[DashboardController::class,'index'])->middleware('admin');



require __DIR__.'/auth.php';

