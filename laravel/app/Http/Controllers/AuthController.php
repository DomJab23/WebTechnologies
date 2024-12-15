<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Login logic here
        $request->validate([
                "uname" => "required",
                "psw" => "required",
            ]);

        $credentials["uname"] = $request->uname;
        $credentials["password"] =$request->psw;

        if(Auth::attempt($credentials)&&RateLimiter::attempt('login:'.$request->uname, 5, function(){}, 180))
        {
            if(Auth::user()->usertype =='employee'){
                return redirect('/management');
            }elseif(Auth::user()->usertype=='volunteer'){
                return redirect('/volunteer');
            }elseif(Auth::user()->usertype=='admin'){
                return redirect('/admin');
            }
        }
        else
        {
            RateLimiter::increment('login:'.$request->uname);
            return redirect('/');
            
            if(RateLimiter::tooManyAttempts('login'.$request->uname,10))
            {
                return ('Too many attempts to log in for user, please wait and try again later.');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
