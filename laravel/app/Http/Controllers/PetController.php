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
        $images =$pet->images()->get();
        return(view("onepet",['pet'=>$pet, 'images'=>$images]));
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
        ]);

        $pet = Pet::find($request->id);

        if($request->name!=null) $pet->name=$request->name;
        if($request->age!=null)$pet->age=$request->age;
        if($request->species!=null)$pet->species=$request->species;
        if($request->breed!=null)$pet->breed=$request->breed;
        if($request->has('sterilized'))$pet->sterilized=true;
        if($request->health!=null)$pet->health=$request->health;
        if($request->descriptions!=null)$pet->descriptions=$request->descriptions;

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
