<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        // Handle the form submission
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postalcode' => 'required|string|max:10',
            'membership_type' => 'required|string',
            'payment_plan' => 'required|string',
            'interests' => 'array',
            'comments' => 'nullable|string|max:1000',
        ]);

        Member::create($validatedData);

        return view('index_2')->with('success', 'Thank you for your interest! The TSAP team will review your application form and provide feedback soon via the given email/phone for further steps.');
    }
}
