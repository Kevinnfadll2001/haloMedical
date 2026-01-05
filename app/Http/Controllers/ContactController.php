<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1) Validate
        $validated = $request->validate([
             'name'                => 'required|string|max:255',
        'phone'               => 'required|string|max:50',
        'email'               => 'required|email|max:255',
        'pickup_address'      => 'required|string|max:255',
        'destination_address' => 'required|string|max:255',
        'date'                => 'required|date',
        'time'                => 'required',
        'notes'               => 'nullable|string',
    ]);

        // 2) Save to database
        Contact::create($validated);

        // 3) Redirect back with message
        return back()->with('success', 'Your request has been submitted successfully!');
    }
}
