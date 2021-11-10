<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LocalAuthController extends Controller
{
    public function LoginIndex(){
        return view('Pages/Auth/Login',[
            "title" => "Login",
            "customstyle" => URL::asset('css/Auth/Login.css')
        ]);
    }
    public function RegisterIndex(){
        return view('Pages/Auth/Regist',[
            "title" => "Register",
            "customstyle" => URL::asset('css/Auth/Regist.css')
        ]);
    }
}
