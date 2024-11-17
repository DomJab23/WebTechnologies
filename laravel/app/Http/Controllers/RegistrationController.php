<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Volunteer;

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
        elseif($request->code== 1234)
        {
            $volunteer = new Volunteer();
            $volunteer->email = $request->email;
            $volunteer->phone_number = $request->phone_number;
            $volunteer->name = $request->uname;
            $volunteer->more_about = $request->more_about;

            if ($volunteer->save()) {
                return redirect('/volunteer/dashboard');
            }
        }
        else
        {
            return redirect('/register')->with('error', 'Invalid code provided.');
        }
    }
}
