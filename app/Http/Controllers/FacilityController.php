<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\FacilityRequestMail;

class FacilityController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'facility_name' => 'required',
            'contact_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'monthly_volume' => 'required|numeric',
            'preferred_services' => 'required',
            'message' => 'nullable'
        ]);

        // ✅ Save to database
        FacilityRequest::create($validated);

        // ✅ Send email
        Mail::to('kevinfadel15@gmail.com')
            ->send(new FacilityRequestMail($validated));

        return back()->with('success', 'Your partnership request has been submitted!');
    }
}
