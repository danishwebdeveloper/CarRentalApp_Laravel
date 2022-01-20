<?php

use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\AdminAddCarDetailController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\CarDetailsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main URL
Route::resource('/', HomeController::class);

// Home Page
Route::resource('/home', HomeController::class);


// Accessories Page
Route::resource('/accessories', AccessoriesController::class);

// For registration and all necessary authentication of form
Auth::routes();


// For Car Details
Route::resource('/cardetails', CarDetailController::class);

// Amdin
Route::resource('/admin', AdminAddCarDetailController::class );


