<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function IndexWelcome(){
        return view('Pages/welcome', ["title"=>"Welcome!"]);
    }
    public static function IndexHome(){
        if (Auth::check()) {
            // The user is logged in...
            return view('Pages/home', ["title"=>"Home"]);
        }
        return self::IndexWelcome();
    }
}
