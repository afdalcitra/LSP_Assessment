<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;

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

// Login routes
Route::post('/loginattempt', [AuthController::class, 'login'])->name('login');;
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Homepage Routes
Route::get('/homepage', [AuthController::class, 'showHomepageForm'])->name('homepage');
Route::post('/homepage', [AuthController::class, 'homepage']);

// Registration routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


// Forget Password Routes
Route::get('/forget', [AuthController::class, 'showForgetPasswordForm'])->name('forget');
Route::post('/forget', [AuthController::class, 'forget']);