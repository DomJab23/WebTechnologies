<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {

        if($request->code==123456789)
        {
            $user=new User();
        
            $user->uname = $request->uname;
            $user->password = $request->password;

            if ($user->save())
            {
                return redirect()->intended("/welcome");
            }
            else
            {
                return redirect()->intended("/register");
            }

        }
        else
        {
            return redirect()->intended("/register");
        }
    }
}
