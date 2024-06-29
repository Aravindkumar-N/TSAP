<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate incoming requests
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female,other',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postalcode' => 'required|string|max:20',
            'interests' => 'required|array',
            'interests.*' => 'string',
            'avail' => 'required|string|in:Weekdays,Weekends,Both',
            'accept_terms' => 'accepted', // Assuming you have a checkbox for terms acceptance
        ]);

        // Save to database or perform any other necessary actions
        Volunteer::create($validatedData);

        // Optionally, you can return a success message or redirect to a thank-you page
        return redirect()->route('home'); // Define 'thank-you' route in web.php
    }
}
