<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\VolOpportunity;

class VolunteerController extends Controller
{
    public function dashboard()
    {
        $opportunities = VolOpportunity::all();
        return view('volunteer.dashboard', compact('opportunities'));
    }

    public function bookSlot(Request $request)
    {
        $request->validate([
            'opportunity_id' => 'required|exists:vol_opportunitys,id',
        ]);

        $volunteer = auth()->user();

        // Check if slot is already booked
        if ($volunteer->opportunities()->where('opportunity_id', $request->opportunity_id)->exists()) {
            return back()->with('error', 'You have already booked this slot.');
        }

        $volunteer->opportunities()->attach($request->opportunity_id);

        return redirect()->back()->with('success', 'Slot booked successfully.');
    }
}
