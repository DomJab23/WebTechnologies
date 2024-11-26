<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;


class PetController extends Controller
{
    public function get_pets()
    {
        $pets = Pet::all();
        return response()->json($pets);
    }

 
public function get_pet(Request $request)
{
    $pet = Pet::find($request->id);

    if (!$pet) {
        return response()->json(['error' => 'Pet not found'], 404);
    }

    $images = $pet->images()->get();
    return response()->json(['pet' => $pet, 'images' => $images]);
}

public function delete_pet(Request $request)
{
    $request->validate([
        "id" => "required|exists:pets,id",
    ]);

    $pet = Pet::find($request->id);
    $pet->delete();

    return response()->json(null, 204); // Return 204 No Content status
}


    public function update_pet(Request $request)
    {
        $request->validate([
            "id"=>"required",
        ]);

        $pet = Pet::find($request->id);
        if (!$pet) {
            return response()->json(['error' => 'Pet not found'], 404);
        }

        if($request->name!=null) $pet->name=$request->name;
        if($request->age!=null)$pet->age=$request->age;
        if($request->species!=null)$pet->species=$request->species;
        if($request->breed!=null)$pet->breed=$request->breed;
        if($request->has('sterilized'))$pet->sterilized=true;
        if($request->health!=null)$pet->health=$request->health;
        if($request->descriptions!=null)$pet->descriptions=$request->descriptions;

        $pet->save();
        return response()->json($pet, 200);
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
        return response()->json($pet, 201);
    }
    public function get_volunteer_pets()
    {
        $pets = Pet::all();
        $volunteeringPets = Pet::where('volunteer_user_id', auth()->id())->get();
        
        return view('volunteer', compact('pets', 'volunteeringPets'));
    }
    public function volunteer_for_pet(Request $request)
    {
        $pet = Pet::findOrFail($request->pet_id);
    
        if ($pet->status == 'AVAILABLE') {
            $pet->status = 'PENDING';
            $pet->volunteer_user_id = auth()->id();
            $pet->save();
        }

        return redirect()->route('volunteer');
    }

}
