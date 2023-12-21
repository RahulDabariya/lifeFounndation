<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginPage(){
        return view ('NewNgo/Auth/Login');
    }

    public function loginss(Request  $request){

        $request->validate([
    
            'email' =>'required',
            'password' =>'required',
    
        ]);
    
        $credentials =$request->only('email','password');
        if(Auth::attempt( $credentials)){
            return redirect('NewNgo')->withSuccess('singed in');
        }
    
        return redirect("login")->withSuccess('login detalis are not valid');
    
       }

       public function singout(){
        Auth::logout();
        return redirect('login');
       }
}
