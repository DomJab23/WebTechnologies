<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log; // This is used for logging donation data.

class DonationController extends Controller
{
    // This method processes the donation.
    public function processDonation(Request $request)
    {
        // Validate the donation data (credit card number, expiry date, and CVV).
        $validated = $request->validate([
            'cardNumber' => 'required|digits:16',
            'expiryDate' => 'required|date_format:m/y',
            'cvv' => 'required|digits:3',
        ]);

        // Process the donation here.
        // Normally, you'd integrate with a payment gateway like Stripe or PayPal.
        // For now, we just log the data for testing purposes.
        Log::info('Donation received:', $validated);

        // Redirect back with a success message.
        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}
