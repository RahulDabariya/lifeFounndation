<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Registers(){

        return view ('NewNgo/Auth/Register');
    }

    public function registerss(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);

        $datainsert =new User();
        $datainsert->name =$request->get('name');
        $datainsert->email =$request->get('email');
        $datainsert->password=Hash::make ($request->get('password'));

        $datainsert->save();

        \Mail::send('NewNgo/Auth/EmailSend',compact('datainsert'), function ($message) use($request) {
            $message->to($request->get('email'))->subject('New Job For You!');
        });


        auth()->login($datainsert);
 
        return redirect('login');


    }
}
