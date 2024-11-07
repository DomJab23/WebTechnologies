<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function get_all_pets()
    {
        $pets = Pet::all()->get();
        return(route("/gallery")->with($pets));
    }

    public function get_pet(Request $request)
    {
        $pet = Pet::where('id', $request->id);
        return(route("")->with($pet));
    }

    public function delete_pet(Request $request)
    {
        Pet::destroy($request->id);
    }

    public function update_pet(Request $request)
    {
        $pet = Pet::find($request->id);

        $pet->name=$request->name;
        $pet->age=$request->age;
        $pet->species=$request->species;
        $pet->breed=$request->breed;
        $pet->sterilized=$request->sterilized;
        $pet->health=$request->health;
        $pet->descriptions=$request->descriptions;

        $pet->save();
    }

    public function add_pet(Request $request)
    {
        $pet = new Pet;

        $pet->name=$request->name;
        $pet->age=$request->age;
        $pet->species=$request->species;
        $pet->breed=$request->breed;
        $pet->sterilized=$request->sterilized;
        $pet->health=$request->health;
        $pet->descriptions=$request->descriptions;

        $pet->save();
    }
}
