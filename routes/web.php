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

//Admin Route
Route::get('AdminPanel/AdminDashboard',[DashboardController::class,'index'])->middleware('admin');
Route::get('AdminPanel/ViewUser',[DashboardController::class,'user'])->name('AdminPanel.ViewUser');
Route::get('AdminPanel/ViewMovie',[MovieController::class,'View'])->name('AdminPanel.ViewMovie');
Route::get('AdminPanel/AddMovie',[DashboardController::class,'addMovie'])->name('AdminPanel.AddMovie');
Route::get('AdminPanel/AddUser',[DashboardController::class,'addUser'])->name('AdminPanel.AddUser');
Route::post('AdminPanel/store', [DashboardController::class, 'store'])->name('AdminPanel.store');
Route::post('AdminPanel/storeMovie', [DashboardController::class, 'storeM'])->name('AdminPanel.storeM');
Route::get('AdminPanel/EditMovie/{movie}/edit', [DashboardController::class, 'editMovie'])->name('AdminPanel.EditMovie');
Route::put('AdminPanel/EditMovie/{movie}/update', [DashboardController::class, 'updateMovie'])->name('AdminPanel.updateM');
Route::get('AdminPanel/EditUser/{user}/edit', [DashboardController::class, 'editUser'])->name('AdminPanel.EditUser');
Route::put('AdminPanel/EditUser/{user}/update', [DashboardController::class, 'updateUser'])->name('AdminPanel.updateU');
Route::delete('AdminPanel/ViewUser/{user}', [DashboardController::class, 'deleteU'])->name('AdminPanel.deleteU');
Route::delete('AdminPanel/ViewMovie/{movie}', [DashboardController::class, 'deleteM'])->name('AdminPanel.deleteM');

require __DIR__.'/auth.php';


// Added a new route for the AJAX search request
Route::get('/search', [MovieController::class, 'ajaxSearch'])->name('dashboard.movies.search');
