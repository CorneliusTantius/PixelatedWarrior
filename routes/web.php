<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LocalAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiscController;
use Illuminate\Support\Facades\Route;

/**********************/
/* Application Routes */
/**********************/
/* Auth Routes */
Route::get('/', [HomeController::class, "IndexHome"]);
Route::get('/home', [HomeController::class, "IndexHome"]);
Route::get('/login', [LocalAuthController::class, "IndexLogin"])->middleware('guest');
Route::get('/register', [LocalAuthController::class, "IndexRegister"])->middleware('guest');

Route::get('/auth/google/redirect', [GoogleAuthController::class, "redirectToGoogle"]);
Route::get('/auth/google/callback', [GoogleAuthController::class, "handleGoogleCallback"]);

/* Game Routes */
Route::get('/game', [GameController::class, "IndexGame"])->middleware('customer');
Route::get('/game/{prev}', [GameController::class, "IndexGame"])->middleware('customer');

/* Standard Routes */
Route::get("/dashboard", [DashboardController::class, "IndexDashboard"]);
Route::get("/about", [MiscController::class, "IndexAbout"]);
Route::get("/faq", [MiscController::class, "IndexFaq"]);

/* Admin Routes */
Route::get("/admin/user/details/{$id}", [HomeController::class, "IndexAdminDetails"]);

/***************/
/*  API Routes */
/***************/
Route::post('/auth/local/login',  [LocalAuthController::class, "LoginValidator"]);
Route::post('/auth/local/register',  [LocalAuthController::class, "RegisterValidator"]);
Route::get('/auth/logout', [LocalAuthController::class, "Logout"]);
/* Game API Routes */
Route::post('/answer/send/{x}', [GameController::class, "handleQuizAnswer"]);
/* Standard API Routes */
Route::post("/dashboard/update/image", [DashboardController::class, "UpdatePicture"]);

Route::get("/user/delete/{id}", [HomeController::class, "DeleteUser"]);
