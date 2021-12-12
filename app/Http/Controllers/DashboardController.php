<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    public function IndexDashboard(){
        // dd(Auth::user());
        return view('Pages/dashboard', ["title"=>"Dashboard"]);
    }
}
