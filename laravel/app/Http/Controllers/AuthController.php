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
            return redirect("/management");
        }
        else
        {
            return redirect('/');
        }


    }
}
