<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Dashboard\CustomerController;

use App\Http\Controllers\Dashboard\MovieController;


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



Route::get('/dashboard/customers',[CustomerController::class, 'index'])->name('dashboard.customers');
Route::get('/dashboard/customers/create',[CustomerController::class, 'create'])->name('dashboard.customers.create');
Route::post('dashboard/customers/store',[CustomerController::class, 'store'])->name('dashboard.customers.store');
Route::get('/dashboard',[DashboardController::class,'index']);
// delet dashboard
Route::get('/movies/index',[MovieController::class,'index'])->name('dashboard.movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('dashboard.movies.show');




Route::get('/',[MovieController::class,'index'])->name('dashboard.movies.index');
Route::get('dashboard/movies/animation',[MovieController::class,'animation'])->name('dashboard.movies.animation');
Route::get('dashboard/movies/comedy',[MovieController::class,'comedy'])->name('dashboard.movies.comedy');
Route::get('dashboard/movies/action',[MovieController::class,'action'])->name('dashboard.movies.action');
Route::get('dashboard/movies/drama',[MovieController::class,'drama'])->name('dashboard.movies.drama');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('dashboard/search/search', function () {
    return view('dashboard.search.search');
})->name('dashboard.search.search');


require __DIR__.'/auth.php';
 
