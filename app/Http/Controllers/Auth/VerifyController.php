<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verifyForm(){
        return view('Auth.verify');
    }

    public function Verify(Request $request){
        if($user=User::where('code',$request->code)->first()){
            $user->active=1;
            $user->code=null;
            $user->save();
            return redirect()->route('login-form')->withMessage('Your account is active');
        }
        else{
            return back()->withMessage('verify code is not correct. Please try again');
        }
    }
}
