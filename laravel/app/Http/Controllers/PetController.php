<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function get_pets()
    {
        $pets = Pet::all();
        return(view("petmanagement", ['pets'=>$pets]));
    }

    public function get_pet(Request $request)
    {
        $pet = Pet::find($request->id);
        return(view("onepet",['pet'=>$pet]));
    }

    public function delete_pet(Request $request)
    {
        $request->validate([
            "id"=>"required",
        ]);
        Pet::destroy($request->id);
        return(redirect("/management"));
    }

    public function update_pet(Request $request)
    {
        $request->validate([
            "id"=>"required",
            "name" => "required",
            "age" => "required",
            "species" => "required",
            "breed" => "required",
            "sterilized" => "required",
            "health" => "required",
            "descriptions" => "required",
        ]);

        $pet = Pet::find($request->id);

        $pet->name=$request->name;
        $pet->age=$request->age;
        $pet->species=$request->species;
        $pet->breed=$request->breed;
        $pet->sterilized=$request->sterilized;
        $pet->health=$request->health;
        $pet->descriptions=$request->descriptions;

        $pet->save();
        return(redirect("/management"));
    }

    public function add_pet(Request $request)
    {   
        $request->validate([
            "name" => "required",
            "age" => "required",
            "species" => "required",
            "breed" => "required",
            "sterilized" => "required",
            "health" => "required",
            "descriptions" => "required",
        ]);
        
        $pet = new Pet;

        $pet->name=$request->name;
        $pet->age=$request->age;
        $pet->species=$request->species;
        $pet->breed=$request->breed;
        $pet->sterilized=$request->has('sterilized');
        $pet->health=$request->health;
        $pet->descriptions=$request->descriptions;

        $pet->save();
        return(redirect("/management"));
    }
}
