<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password; 

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "uname" => 
                ["required",
                "unique:App\Models\User,uname"],
            "password" => 
                ['required', 
                Password::
                min(8)
                ->mixedCase()
                ->numbers()
                ->symbols()
                ],
                "code"=>"required",
            ],
    [
            "uname.required"=> "Please provide a username",
            "uname.unique"=>"This username is already taken",
            "password.required"=> "Please provide a password",
            "password.min"=> "Please use a password that is at least 8 characters long",
            "password.mixed"=> "Please provide a password that contains at least one uppercase and one lowercase character",
            "password.numbers"=> "Please provide a password that contains at least one number",
            "password.symbols"=> "Please provide a password that contains at least one symbol",
            "code.required"=> "Please provide a code",
            ]
        );

        $user = new User();
        $user->uname = $request->uname;
        $user->password = Hash::make($request->password);

        if ($request->code == 123456789) {
            $user->usertype = 'employee';  
        } elseif ($request->code == 9876) {
            $user->usertype = 'volunteer'; 
        } elseif ($request->code == 4186) {
            $user->usertype = 'admin';
        } else {
            return redirect('/register'); 
        }
    
        if ($user->save()) {
            return redirect('/');
        }
    
    }
}
