<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\SendCode;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm(){
        return view("Auth.register");
    }
    public function register(Request $request){
        // return 'ok';
        $request->validate(
            [
                'name' => 'required',
                'email'=> 'required|unique:users',
                'phone'=> 'required',
                'password' => 'required|confirmed',
            ]
        );
       $user = User::create(
            [
                'name'   => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'password' => bcrypt($request->password),
            ]
        );

        if($user){
            $user->code = SendCode::sendCode($user->phone);
            $user->save();
            toastr()->success('Please verify your account');
            return redirect()->route('verify-form');
        }

    }
    
}
