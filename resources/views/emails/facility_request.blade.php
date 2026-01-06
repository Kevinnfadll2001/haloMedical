<h2>New Facility Partnership Request</h2>

<p><strong>Facility Name:</strong> {{ $data['facility_name'] }}</p>
<p><strong>Contact Name:</strong> {{ $data['contact_name'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Monthly Volume:</strong> ${{ $data['monthly_volume'] }}</p>
<p><strong>Preferred Services:</strong> {{ $data['preferred_services'] }}</p>

@if(!empty($data['message']))
<hr>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>
@endif
