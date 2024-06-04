<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CustomerController;

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
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/dashboard/customers', [CustomerController::class, 'index'])->name('dashboard.customers');
Route::get('/dashboard/customers/create',[CustomerController::class, 'create'])->name('dashboard.customers.create');
Route::post('dashboard/customers/store',[CustomerController::class, 'store'])->name('dashboard.customers.store');
