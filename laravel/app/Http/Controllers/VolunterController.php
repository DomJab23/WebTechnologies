<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class VolunterController extends Controller
{
    public function get_volunteer_pets()
    {
        $pets = Pet::orderBy('id', 'asc')->get();
        $volunteeringPets = Pet::where('volunteer_user_id', auth()->id())->get();
        return view('volunteer', compact('pets', 'volunteeringPets'));
    }
    public function volunteering_pets(Request $request)
    {
        $pet = Pet::findOrFail($request->pet_id);
    
        if ($pet->status == 'AVAILABLE') {
            $pet->status = 'PENDING';
            $pet->volunteer_user_id = auth()->id();
            $pet->save();
        }

        return redirect()->route('volunteer');
    }

    public function unvolunteer_pet(Request $request)
    {
        $pet = Pet::findOrFail($request->pet_id);

        if ($pet->status === 'PENDING' && $pet->volunteer_user_id == auth()->id()) {
            $pet->status = 'AVAILABLE';
            $pet->volunteer_user_id = null;
            $pet->save();
        }

        return redirect()->route('volunteer');
    }
    
    public function accept_volunteer(Request $request)
    {
        $pet = Pet::findOrFail($request->pet_id);
    
        if ($pet->status == 'PENDING') {
            $pet->status = 'MATCHED';
            $pet->save();
        }

        return redirect()->route('volunteermanager');
    }
}
