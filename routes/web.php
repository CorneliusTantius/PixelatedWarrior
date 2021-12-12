<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LocalAuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/**********************/
/* Application Routes */
/**********************/
Route::get('/', [HomeController::class, "IndexHome"]);
Route::get('/login', [LocalAuthController::class, "IndexLogin"]);
Route::get('/register', [LocalAuthController::class, "IndexRegister"]);

Route::get('/auth/google/redirect', [GoogleAuthController::class, "redirectToGoogle"]);
Route::get('/auth/google/callback', [GoogleAuthController::class, "handleGoogleCallback"]);

/* Game Routes */
Route::get('/game', [GameController::class, "IndexGame"]);
/* Game API Routes */
Route::post('/answer/send/{x}', [GameController::class, "handleQuizAnswer"]);

/***************/
/*  API Routes */
/***************/
Route::post('/auth/local/login',  [LocalAuthController::class, "LoginValidator"]);
Route::post('/auth/local/register',  [LocalAuthController::class, "RegisterValidator"]);
Route::get('/auth/logout', [LocalAuthController::class, "Logout"]);