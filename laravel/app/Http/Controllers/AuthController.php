<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->usertype =='admin'){
                return redirect("/management");
            }elseif(Auth::user()->usertype=='volunteer'){
                return redirect('/volunteer');
            }
        }
        else
        {
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
