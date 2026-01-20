@extends('layouts.index')

@section('content')
<!-- FROM HEREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<!-- support-style-two -->
<section class="support-style-two p_0 centred">
    <div class="auto-container">
        <div class="inner-container pt_120 pb_90">
            <div class="sec-title mb_50">
                <span class="sub-title mb_12">Contact us</span>
                <h2>Contact Informations</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <h5>Emergency Booking:</h5>
                        <h2><a href="tel:912345431">(951) 900-4840</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <h5>Emergency Booking:</h5>
                        <h2><a href="tel:912345432">(951) 900-4840</a></h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <h5>Emergency Booking:</h5>
                        <h2><a href="tel:912345433">(951) 900-4840</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- support-style-two end -->

<!-- contact-section -->
<section class="contact-section pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- MAP COLUMN -->
            <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                <div class="map-inner">
                    <iframe src="https://www.google.com/maps?q=21804+Cactus+Ave+Suite+103+Riverside+CA+92518&output=embed"
                        width="100%" height="500" frameborder="0" style="border:0;" loading="lazy">
                    </iframe>
                </div>

                <div class="dispatch-info mt_30">
                    <h3>Dispatch Number</h3>
                    <p style="font-size:22px;font-weight:600;">(951) 900-4840</p>

                    <h4>Hours of Operation</h4>
                    <p>5 AM – 10 PM, 7 days a week<br>
                        After-hours transport available with advance notice.
                    </p>
                </div>
            </div>

            <!-- FORM COLUMN -->
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_10">

                    <div class="sec-title mb_45">
                        <span class="sub-title mb_12">Contact Page</span>
                        <h2>Send a Message</h2>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">Please correct the highlighted fields below.</div>
                    @endif

                    <style>
                        .field-error { border:2px solid red !important; }
                        .required-msg { color:red;font-weight:bold;font-size:14px;display:none; }
                    </style>

                    <form method="POST" action="{{ route('contact.store') }}" id="contact-form" class="default-form">
                        @csrf

                        <div class="row clearfix">

                            <div class="col-lg-6 form-group">
                                <input type="text" id="name" name="name" placeholder="Name">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <div class="col-lg-6 form-group">
                                <input type="text" id="phone" name="phone" placeholder="Phone">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <div class="col-lg-12 form-group">
                                <input type="email" id="email" name="email" placeholder="Email">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <!-- PICKUP ADDRESS -->
                            <div class="col-lg-12 form-group">
                                <input type="text" id="pickup_address" name="pickup_address" placeholder="Pickup Address">
                                <span class="required-msg">Select a valid US pickup address</span>
                            </div>

                            <!-- DESTINATION ADDRESS -->
                            <div class="col-lg-12 form-group">
                                <input type="text" id="destination_address" name="destination_address" placeholder="Destination Address">
                                <span class="required-msg">Select a valid US destination address</span>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Pickup Date</label>
                                <input type="date" id="date" name="date">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Pickup Time</label>
                                <input type="time" id="time" name="time" min="05:00" max="22:00">
                                <span class="required-msg">This field is required.</span>
                            </div>

                            <div class="col-lg-12 form-group">
                                <textarea name="notes" placeholder="Additional Notes"></textarea>
                            </div>

                            <div class="col-lg-12 form-group message-btn">
                                <button type="submit" class="theme-btn btn-one">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- GOOGLE PLACES SCRIPT (YOUR SCRIPT) -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxqohTB1YdsTzoFQlrm1xm1Q9E2td60Fg&libraries=places"></script>

<script>
function initAutocomplete() {

    const allowedCounties = [
        "Orange County",
        "Riverside County",
        "San Bernardino County",
        "Los Angeles County"
    ];

    function getCounty(place) {
        let county = "";
        place.address_components.forEach(c => {
            if (c.types.includes("administrative_area_level_2")) {
                county = c.long_name;
            }
        });
        return county;
    }

    function formatUS(place) {
        let parts = {};
        place.address_components.forEach(c => {
            if (c.types.includes("street_number")) parts.street = c.long_name;
            if (c.types.includes("route")) parts.route = c.long_name;
            if (c.types.includes("locality")) parts.city = c.long_name;
            if (c.types.includes("administrative_area_level_1")) parts.state = c.short_name;
            if (c.types.includes("postal_code")) parts.zip = c.long_name;
        });

        return `${parts.street || ""} ${parts.route || ""}, ${parts.city}, ${parts.state} ${parts.zip}, USA`
            .replace(/\s+/g,' ')
            .trim();
    }

    const pickupAutocomplete = new google.maps.places.Autocomplete(
        document.getElementById("pickup_address"),
        { types:["geocode"], componentRestrictions:{country:"us"} }
    );

    pickupAutocomplete.addListener("place_changed", function() {
        const place = pickupAutocomplete.getPlace();
        const county = getCounty(place);

        if (!allowedCounties.includes(county)) {
            alert("Pickup allowed only in:\n\n" + allowedCounties.join("\n"));
            document.getElementById("pickup_address").value = "";
            return;
        }

        document.getElementById("pickup_address").value = formatUS(place);
    });

    const destinationAutocomplete = new google.maps.places.Autocomplete(
        document.getElementById("destination_address"),
        { types:["geocode"], componentRestrictions:{country:"us"} }
    );

    destinationAutocomplete.addListener("place_changed", function() {
        const place = destinationAutocomplete.getPlace();
        document.getElementById("destination_address").value = formatUS(place);
    });
}

document.addEventListener("DOMContentLoaded", initAutocomplete);
</script>

@endsection
