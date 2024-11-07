<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {

        if($request->code==123456789)
        {
            $user=new User();
        
            $user->uname=$request->uname;
            $user->password=$request->password;

            if ($user->save())
            {
                return redirect()->intended("/gallery");
            }
            else
            {
                return redirect()->intended("/registration");
            }

        }
        else
        {
            return redirect()->intended("/registration");
        }
    }
}
