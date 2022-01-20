<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function IndexWelcome()
    {
        return view('Pages/welcome', ["title" => "Welcome!"]);
    }
    public static function IndexHome()
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin == true) {
                $users = User::where(['is_admin' => false])->get();
                return view('Pages/Admin/manage', ["title" => "Admin Home", "users" => $users]);
            }
            // The user is logged in...
            return view('Pages/home', ["title" => "Home"]);
        }
        return self::IndexWelcome();
    }
    public static function IndexAdminDetails($id)
    {
        $thisUser = User::find($id);
        return view('Pages/Admin/userview', ["title" => "User Details", "user" => $thisUser]);
    }
    public static function DeleteUser($id)
    {
        $thisUser = User::find($id);
        $thisUser->delete();
        return back();
    }
}
