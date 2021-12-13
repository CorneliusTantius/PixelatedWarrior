<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class DashboardController extends Controller
{
    public function IndexDashboard(){
        // dd(Auth::user());
        return view('Pages/dashboard', ["title"=>"Dashboard"]);
    }
    public function UpdatePicture(Request $request){
        $user = User::find(Auth::user()->id);
        $file = $request->file('image');
        $imageName = time().'_'.$user->id.'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imagePath = 'images/'.$imageName;
        $user->image = $imagePath;
        $user->update();
        return redirect()->back();
    }
}
