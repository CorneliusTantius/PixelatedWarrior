<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocalAuthController extends Controller
{
    public function LoginIndex(){
        return view('Pages/Auth/Login');
    }
    public function RegisterIndex(){
        return view('Pages/Auth/Regist');
    }
}
