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
