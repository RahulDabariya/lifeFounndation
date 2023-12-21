<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;
use App\Models\User;

class ForgoteController extends Controller
{
    public function forgotepage(){
        return view('NewNgo/Auth/Forgote');
    }

    public function confirmpass(){
        return view('NewNgo/Auth//Confirms');
    }

    public function chackemail(Request $request){
        $request->validate([
         'email'=>'required'
        ]); 
 
         $result=User::where('email',$request->email)->first();
        if($result){
         $rendpass=rand(100000,999999);
         $result->otp=$rendpass;
         $result->save();
         
         \Mail::send('NewNgo/Auth/SendOtp',compact('rendpass'), function ($message) use($request) {
             $message->to($request->get('email'))->subject('Id Password Forgote OTP!');
         });
         return redirect('Confirms');
        }
     }

     public function updatepass(Request $request)
     {
         $request->validate([
             'password' => 'required',
             'confpass' => 'required',
             'otp' => 'required'
         ]);
 
         $result = User::where('otp', $request->otp)->first();
         if (!$result) {
             return redirect()->back();
         }
 
         $result->password = Hash::make($request->password);
         $result->save();
         return redirect('login');
     }
}
