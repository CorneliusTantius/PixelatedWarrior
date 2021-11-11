<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function RegisterValidator(Request $request){
        $validatedData =  $request->validate(request(),[
            'name'=>['required','min:3','max:22'],
            'age'=>['required','numeric', 'min:17'],
            'email'=>['required','email:dns','unique:users'],
            'password'=>['required','regex:/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/','min:8']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        request()->session()->flash('success', 'Registration successfull!');
        
        return redirect()->to('/home');
    }
    public function LoginValidator(Request $request){
        $credentials =$request->validate([
            'email'=>['required','email:dns'],
            'password'=>['required']
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success','Login Success');
        }

        return redirect()->to('/login');
    }

    public static function Logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
