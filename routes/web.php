<?php
use App\Http\Controllers\Auth\RegisteredUserController;
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

//register
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
//home
Route::get('/',[MovieController::class,'index'])->name('dashboard.movies.movie');

//Payment
Route::get('/paymant',[MovieController::class,'payment'])->name('dashboard.movies.paymant');
Route::get('payment/success',[MovieController::class,'paymentsuccess'])->name('payment.success');

//Type of Movies
Route::get('dashboard/movies/animation',[MovieController::class,'animation'])->name('dashboard.movies.animation');
Route::get('dashboard/movies/comedy',[MovieController::class,'comedy'])->name('dashboard.movies.comedy');
Route::get('dashboard/movies/action',[MovieController::class,'action'])->name('dashboard.movies.action');
Route::get('dashboard/movies/drama',[MovieController::class,'drama'])->name('dashboard.movies.drama');

//view after login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/home',[DashboardController::class,'MultiAuth'])->name('AdminPanel.AdminDashboard');


//search view

Route::get('dashboard/Layout/search', function () {
    return view('dashboard.Layout.search');
})->name('dashboard.Layout.search');

//AboutUS view
Route::get('dashboard/Layout/aboutus', function () {
    return view('dashboard.Layout.aboutus');
})->name('dashboard.Layout.aboutus');

//Admin Route
Route::get('AdminPanel/AdminDashboard',[DashboardController::class,'index'])->name('AdminPanel.AdminDashboard')->middleware('admin');
Route::get('AdminPanel/ViewUser',[DashboardController::class,'user'])->name('AdminPanel.ViewUser')->middleware('admin');
Route::get('AdminPanel/ViewMovie',[MovieController::class,'View'])->name('AdminPanel.ViewMovie')->middleware('admin');
Route::get('AdminPanel/AddMovie',[DashboardController::class,'addMovie'])->name('AdminPanel.AddMovie')->middleware('admin');
Route::get('AdminPanel/AddUser',[DashboardController::class,'addUser'])->name('AdminPanel.AddUser')->middleware('admin');
Route::post('AdminPanel/store', [DashboardController::class, 'store'])->name('AdminPanel.store')->middleware('admin');
Route::post('AdminPanel/storeMovie', [DashboardController::class, 'storeM'])->name('AdminPanel.storeM')->middleware('admin');
Route::get('AdminPanel/EditMovie/{movie}/edit', [DashboardController::class, 'editMovie'])->name('AdminPanel.EditMovie')->middleware('admin');
Route::put('AdminPanel/EditMovie/{movie}/update', [DashboardController::class, 'updateMovie'])->name('AdminPanel.updateM')->middleware('admin');
Route::get('AdminPanel/EditUser/{user}/edit', [DashboardController::class, 'editUser'])->name('AdminPanel.EditUser')->middleware('admin');
Route::put('AdminPanel/EditUser/{user}/update', [DashboardController::class, 'updateUser'])->name('AdminPanel.updateU')->middleware('admin');
Route::delete('AdminPanel/ViewUser/{user}', [DashboardController::class, 'deleteU'])->name('AdminPanel.deleteU')->middleware('admin');
Route::delete('AdminPanel/ViewMovie/{movie}', [DashboardController::class, 'deleteM'])->name('AdminPanel.deleteM')->middleware('admin');
Route::get('AdminPanel/Profile',[DashboardController::class,'profile'])->name('AdminPanel.Profile')->middleware('admin');
Route::put('AdminPanel/profileUpdate/{user}', [DashboardController::class, 'updateProfile'])->name('AdminPanel.profileUpdate')->middleware('admin');
Route::get('AdminPanel/ViewCoupons',[DashboardController::class,'coupon'])->name('AdminPanel.ViewCoupons')->middleware('admin');

require __DIR__.'/auth.php';


// Route for full search results
Route::get('/search', [MovieController::class, 'ajaxSearch'])->name('dashboard.movies.search');
// Route for search suggestions
Route::get('/search-suggestions', [MovieController::class, 'searchSuggestions'])->name('dashboard.movies.searchSuggestions');

// Route for showing movie details
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('dashboard.movies.show');
