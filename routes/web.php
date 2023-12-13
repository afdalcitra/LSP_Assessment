<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstrumentController;

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

// Init Routes
Route::get('/', [AuthController::class, 'viewLogin'])->name('viewLogin');
Route::post('/loginattempt', [AuthController::class, 'login'])->name('login');;

//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//User
Route::group(['middleware' => 'customer'], function () {
    
    Route::get('/user/profile', [UserController::class, 'showProfileForm'])->name('showProfileForm');
    
    Route::get('/user/edit', [UserController::class, 'editProfileForm'])->name('editProfileForm');

    Route::post('/user/edit', [UserController::class, 'editProfileUpdate'])->name('editProfileUpdate');

    Route::get('/user/reservation', [UserController::class, 'showReservationTable'])->name('showReservationTable');
    
    Route::get('/user/history', [UserController::class, 'showReservationHistory'])->name('showReservationHistory');
    

    
});

//Admin
Route::group(['middleware' => 'admin'], function () {
    
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('showDashboard');

    
});

// Homepage Routes
Route::get('/homepage', [AuthController::class, 'showHomepageForm'])->name('homepage');
Route::post('/homepage', [AuthController::class, 'homepage']);

// Registration routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Forget Password Routes
Route::get('/forget', [AuthController::class, 'showForgetPasswordForm'])->name('forget');
Route::post('/forget', [AuthController::class, 'forget']);

//Miscellenaous
//Route::get('/user/reservation', [InstrumentController::class, 'showReservationDetails'])->name('reservationDetails');
