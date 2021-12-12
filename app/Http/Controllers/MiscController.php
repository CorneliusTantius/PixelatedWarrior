<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscController extends Controller
{
    public static function IndexAbout(){
        return view('Pages/misc/about', ["title"=>"About"]);
    }
    public static function IndexFaq(){
        return view('Pages/misc/faq', ["title"=>"FAQ"]);
    }
}
