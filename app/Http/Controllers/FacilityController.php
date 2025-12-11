<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        DB::table('facility_requests')->insert($validated);

        return back()->with('success', 'Your partnership request has been submitted!');
    }
}

