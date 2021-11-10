<?php

use App\Http\Controllers\GoogleAuthController;
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
    return view('welcome');
});
Route::get('/login', function () {
    return view('Auth/Login');
});
Route::get('/register', function () {
    return view('Auth/Regist');
});
Route::get('/api/auth/google/redirect', [GoogleAuthController::class, "redirectToGoogle"]);
Route::get('/api/auth/google/callback', [GoogleAuthController::class, "handleGoogleCallback"]);