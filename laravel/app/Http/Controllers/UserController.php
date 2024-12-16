<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function get_users()
    {
        $users = User::all();
        return(view("usermanagement", ['users'=>$users]));
    }

    public function get_volunteers()
    {
        $pets = Pet::all();
        return(view("volunteeraccept", ['pets'=>$pets]));
    }

    public function delete_user(Request $request)
    {
        $request->validate([
            "id"=>"required",
        ]);
        User::destroy($request->id);
        return(redirect("/admin"));
    }

    public function update_user(Request $request)
    {
        $request->validate([
            "id"=>"required",
        ]);

        $user = User::find($request->id);

        if($request->name!=null) $user->name=$request->uname;

        $user->save();
        return(redirect("/admin"));
    }

    public function add_user(Request $request)
    {   
        $request->validate([
            "uname" => "required",
            "password" => "required"
        ]);
        
        $user = new User;

        $user->uname=$request->uname;
        $user->password=$request->password;

        $user->save();
        return(redirect("/admin"));
    }
}
