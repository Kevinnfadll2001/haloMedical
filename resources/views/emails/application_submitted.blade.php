<!DOCTYPE html>
<html>
<head>
    <title>Application</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        h2,h3{ margin-bottom:0; }
        p{ margin:2px 0; }
        .section{ margin-bottom:15px; }
    </style>
</head>
<body>
<h2>New Career Application</h2>

<div class="section">
    <h3>Applicant Info</h3>
    <p><strong>Name:</strong> {{ $application->first_name }} {{ $application->middle_initial }} {{ $application->last_name }}</p>
    <p><strong>Email:</strong> {{ $application->email }}</p>
    <p><strong>Phone:</strong> {{ $application->phone }}</p>
    <p><strong>Position Applied For:</strong> {{ $application->position_applied_for }}</p>
    <p><strong>Worked for company:</strong> {{ $application->worked_for_company ? 'Yes' : 'No' }}</p>
    <p><strong>If yes, when:</strong> {{ $application->worked_for_company_when }}</p>
    <p><strong>Felony Conviction:</strong> {{ $application->felony_conviction ? 'Yes' : 'No' }}</p>
    <p><strong>If yes, explain:</strong> {{ $application->felony_explanation }}</p>
</div>

<div class="section">
    <h3>Education</h3>
    <p>High School: {{ $application->high_school }} ({{ $application->hs_from }} - {{ $application->hs_to }}) Diploma: {{ $application->hs_diploma }}</p>
    <p>College: {{ $application->college }} ({{ $application->college_from }} - {{ $application->college_to }}) Degree: {{ $application->college_degree }}</p>
    <p>Other: {{ $application->other_school }} ({{ $application->other_from }} - {{ $application->other_to }}) Degree: {{ $application->other_degree }}</p>
</div>

<div class="section">
    <h3>References</h3>
    @if($application->references->count())
        @foreach($application->references as $reference)
            <p><strong>Name:</strong> {{ $reference->name }}</p>
            <p><strong>Relationship:</strong> {{ $reference->relationship }}</p>
            <p><strong>Company:</strong> {{ $reference->company }}</p>
            <p><strong>Phone:</strong> {{ $reference->phone }}</p>
            <p><strong>Address:</strong> {{ $reference->address }}</p>
            <hr>
        @endforeach
    @else
        <p>No references provided.</p>
    @endif
</div>

<div class="section">
    <h3>Employment</h3>
    @if($application->employmentHistory->count())
        @foreach($application->employmentHistory as $job)
            <p><strong>Company:</strong> {{ $job->company }}</p>
            <p><strong>Title:</strong> {{ $job->title }}</p>
            <p><strong>From:</strong> {{ $job->from }} <strong>To:</strong> {{ $job->to }}</p>
            <p><strong>Supervisor:</strong> {{ $job->supervisor }}</p>
            <p><strong>Reason for Leaving:</strong> {{ $job->reason }}</p>
            <p><strong>Contact Supervisor:</strong> {{ $job->contact_supervisor ? 'Yes' : 'No' }}</p>
            <hr>
        @endforeach
    @else
        <p>No employment history provided.</p>
    @endif
</div>

<div class="section">
    <h3>Military Service</h3>
    <p>Branch: {{ $application->military_branch }}</p>
    <p>From: {{ $application->military_from }} To: {{ $application->military_to }}</p>
    <p>Rank at Discharge: {{ $application->rank_at_discharge }}</p>
    <p>Type of Discharge: {{ $application->type_of_discharge }}</p>
</div>

{{-- <div class="section">
    <p><strong>Resume:</strong> {{ $application->resume ? $application->resume : 'Not uploaded' }}</p>
</div> --}}
</body>
</html>
