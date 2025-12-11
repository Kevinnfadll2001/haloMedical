<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\AppReferences;
use App\Models\AppEmployment;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmittedMail;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function showForm()
    {
        return view('apply');
    }

    public function submitApplication(Request $request)
    {
        $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'agree_disclaimer' => 'accepted',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        // Filter out related data to create the main Application record
        $applicationData = $request->except([
            'ref1_name', 'ref1_relationship', 'ref1_company', 'ref1_phone', 'ref1_address',
            'ref2_name', 'ref2_relationship', 'ref2_company', 'ref2_phone', 'ref2_address',
            'ref3_name', 'ref3_relationship', 'ref3_company', 'ref3_phone', 'ref3_address',
            'job1_company', 'job1_phone', 'job1_address', 'job1_supervisor', 'job1_title', 'job1_start_salary', 'job1_end_salary', 'job1_responsibilities', 'job1_from', 'job1_to', 'job1_reason', 'job1_contact_supervisor',
            'job2_company', 'job2_phone', 'job2_address', 'job2_supervisor', 'job2_title', 'job2_start_salary', 'job2_end_salary', 'job2_responsibilities', 'job2_from', 'job2_to', 'job2_reason', 'job2_contact_supervisor',
            'job3_company', 'job3_phone', 'job3_address', 'job3_supervisor', 'job3_title', 'job3_start_salary', 'job3_end_salary', 'job3_responsibilities', 'job3_from', 'job3_to', 'job3_reason', 'job3_contact_supervisor'
        ]);

        // Handle radio buttons and checkboxes
        $applicationData['is_us_citizen'] = $request->input('is_us_citizen') ? 1 : 0;
        $applicationData['is_authorized_to_work'] = $request->input('is_authorized_to_work') ? 1 : 0;
        $applicationData['worked_for_company'] = $request->input('worked_for_company') === 'yes' ? 1 : 0;
        $applicationData['felony_conviction'] = $request->input('felony_conviction') === 'yes' ? 1 : 0;
        $applicationData['hs_graduated'] = $request->input('hs_graduated') === 'yes' ? 1 : 0;
        $applicationData['college_graduated'] = $request->input('college_graduated') === 'yes' ? 1 : 0;
        $applicationData['other_graduated'] = $request->input('other_graduated') === 'yes' ? 1 : 0;

        // Handle resume upload
        if ($request->hasFile('resume')) {
            $applicationData['resume'] = $request->file('resume')->store('resumes', 'public');
        } else {
            $applicationData['resume'] = null;
        }

        // Create the application record
        $application = Application::create($applicationData);

        // Save references
        for ($i = 1; $i <= 3; $i++) {
            if ($request->filled("ref{$i}_name")) {
                $application->references()->create([
                    'name' => $request->input("ref{$i}_name"),
                    'relationship' => $request->input("ref{$i}_relationship"),
                    'company' => $request->input("ref{$i}_company"),
                    'phone' => $request->input("ref{$i}_phone"),
                    'address' => $request->input("ref{$i}_address"),
                ]);
            }
        }

        // Save employment history
        // Save employment history (support up to 5 jobs)
for ($i = 1; $i <= 5; $i++) {
    if ($request->filled("job{$i}_company")) {
        $application->EmploymentHistory()->create([
            'company' => $request->input("job{$i}_company"),
            'phone' => $request->input("job{$i}_phone"),
            'address' => $request->input("job{$i}_address"),
            'supervisor' => $request->input("job{$i}_supervisor"),
            'title' => $request->input("job{$i}_title"),
            'start_salary' => $request->input("job{$i}_start_salary"),
            'end_salary' => $request->input("job{$i}_end_salary"),
            'responsibilities' => $request->input("job{$i}_responsibilities"),
            'from' => $request->input("job{$i}_from"),
            'to' => $request->input("job{$i}_to"),
            'reason' => $request->input("job{$i}_reason"),
            'contact_supervisor' => $request->input("job{$i}_contact_supervisor") === 'yes' ? 1 : 0,
        ]);
    }
}


        // Send email with PDF attachment
        Mail::to('dispatch@onsitedrive.com')
            ->send(new ApplicationSubmittedMail($application));

        return redirect()->route('home')->with('success', 'Application submitted successfully!');
    }
}
