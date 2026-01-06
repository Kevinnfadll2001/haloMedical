<h2>New Contact / Pickup Request</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>

<hr>

<p><strong>Pickup Address:</strong><br>
{{ $data['pickup_address'] }}</p>

<p><strong>Destination Address:</strong><br>
{{ $data['destination_address'] }}</p>

<hr>

<p><strong>Pickup Date:</strong> {{ $data['date'] }}</p>
<p><strong>Pickup Time:</strong> {{ $data['time'] }}</p>

@if(!empty($data['notes']))
<hr>
<p><strong>Additional Notes:</strong></p>
<p>{{ $data['notes'] }}</p>
@endif
