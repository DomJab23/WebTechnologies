<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "uname" => "required",
            "password" => "required",
            "code"=>"required",
        ]);

        if($request->code==123456789)
        {

            $user=new User();
        
            $user->uname = $request->uname;
            $user->password = Hash::make($request->password);

            if ($user->save())
            {
                return redirect('/');
            }

        }
        else
        {
            return redirect('/register');
        }
    }
}
