<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LocalAuthController;
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

Route::get('/', function () {
    return view('Pages/welcome');
});
Route::get('/login', [LocalAuthController::class, "LoginIndex"]);
Route::get('/register', [LocalAuthController::class, "RegisterIndex"]);

Route::get('/auth/google/redirect', [GoogleAuthController::class, "redirectToGoogle"]);
Route::get('/auth/google/callback', [GoogleAuthController::class, "handleGoogleCallback"]);