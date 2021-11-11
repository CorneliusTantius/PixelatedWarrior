<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LocalAuthController;
use Illuminate\Support\Facades\Route;

/**********************/
/* Application Routes */
/**********************/
Route::get('/', function () {
    return view('Pages/welcome', ["title"=>"Welcome!"]);
});
Route::get('/login', [LocalAuthController::class, "LoginIndex"]);
Route::get('/register', [LocalAuthController::class, "RegisterIndex"]);

Route::get('/auth/google/redirect', [GoogleAuthController::class, "redirectToGoogle"]);
Route::get('/auth/google/callback', [GoogleAuthController::class, "handleGoogleCallback"]);


/***************/
/*  API Routes */
/***************/
Route::post('/auth/local/login',  [LocalAuthController::class, "LoginValidator"]);
Route::post('/auth/local/register',  [LocalAuthController::class, "RegisterValidator"]);