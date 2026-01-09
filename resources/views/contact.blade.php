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
                    <iframe src="https://www.google.com/maps?q=21804+Cactus+Ave+Suite+103+Riverside+CA+92518&output=embed" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

                <!-- DISPATCH INFO -->
                <div class="dispatch-info mt_30">
                    <h3>Dispatch Number</h3>
                    <p style="font-size:22px; font-weight:600; margin-bottom:10px;">(951) 900-4840</p>

                    <h4>Hours of Operation</h4>
                    <p>5 AM – 10 PM, 7 days a week<br>
                        After-hours transport available with advance notice.
                    </p>

                    {{-- <h4>Service Areas</h4>
                    <ul style="padding-left: 20px; margin: 0;">
                        <li>Orange County</li>
                        <li>Riverside County</li>
                        <li>San Bernardino County</li>
                        <li>Los Angeles County</li>
                    </ul> --}}


                </div>
            </div>

            <!-- FORM COLUMN -->
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_10">

                    <div class="sec-title mb_45">
                        <span class="sub-title mb_12">Contact Page</span>
                        <h2>Send a Message</h2>
                    </div>

                    <!-- SUCCESS MESSAGE -->
                    @if(session('success'))
                    <div class="alert alert-success" style="margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- ERROR SUMMARY -->
                    @if($errors->any())
                    <div class="alert alert-danger" style="margin-bottom: 20px;">
                        Please correct the highlighted fields below.
                    </div>
                    @endif

                    <!-- INLINE STYLES FOR ERRORS -->
                    <style>
                        .field-error {
                            border: 2px solid red !important;
                        }

                        .required-msg {
                            color: red;
                            font-weight: bold;
                            font-size: 14px;
                            display: block;
                            margin-top: 5px;
                        }

                    </style>


                    <!-- CONTACT FORM -->
                    <form method="POST" action="{{ route('contact.store') }}" id="contact-form" class="default-form">
                        @csrf
                        <div class="row clearfix">

                            <!-- Name -->
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" id="name" placeholder="Name">
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div>

                            <!-- Phone -->
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" id="phone" placeholder="Phone">
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div>

                            <!-- Email -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div>

                            <!-- Pickup Address -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="pickup_address" id="pickup_address" placeholder="Pickup Address">
                                <span class="required-msg" style="display:none; color:red; font-weight:bold;">This field is required.</span>
                            </div>

                            <!-- Destination Address -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="destination_address" id="destination_address" placeholder="Destination Address">
                                <span class="required-msg" style="display:none; color:red; font-weight:bold;">This field is required.</span>
                            </div>


                            <!-- Service Area -->
                            {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <select name="service_area" id="service_area" class="form-control">
                                    <option value="">Select Service Area</option>
                                    <option>Orange County</option>
                                    <option>Riverside County</option>
                                    <option>San Bernardino County</option>
                                    <option>Los Angeles County</option>
                                </select>
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div> --}}

                            <!-- Service Type -->
                            {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <select name="service_type" id="service_type" class="form-control">
                                    <option value="">Select Service Type</option>
                                    <option>Wheelchair Transport</option>
                                    <option>Ambulatory Transport</option>
                                    <option>Gurney / Stretcher</option>
                                    <option>Hospital Discharge</option>
                                    <option>Interfacility Transfer</option>
                                    <option>Long-Distance Transport</option>
                                </select>
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div> --}}

                            <!-- Pickup Date -->
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight:600; margin-bottom:5px; display:block;">
                                    Pickup Date
                                </label>
                                <input type="date" name="date" id="date">
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div>

                            <!-- Pickup Time -->
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label style="font-weight:600; margin-bottom:5px; display:block;">
                                    Pickup Time
                                </label>
                                <input type="time" name="time" id="time" min="05:00" max="22:00">
                                <span class="required-msg" style="display:none;">This field is required.</span>
                            </div>


                            <!-- Notes (optional, no validation) -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="notes" placeholder="Additional Notes"></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button type="submit" class="theme-btn btn-one">Send Message</button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- subscribe-section -->
{{-- <section class="subscribe-section pt_45 pb_45">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 text-column">
                <div class="text-box">
                    <h2>The Fastest & Secure Medical Service</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_50">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your email" required>
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- subscribe-section end -->
<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();

        let requiredFields = [
            "name"
            , "phone"
            , "email"
            , "pickup_address"
            , "destination_address"
            , "date"
            , "time"
        ];

        let formIsValid = true;

        requiredFields.forEach(function(id) {
            let field = document.getElementById(id);
            let msg = field.parentElement.querySelector(".required-msg");

            field.classList.remove("field-error");
            msg.style.display = "none";

            if (!field.value || field.value.trim() === "") {
                field.classList.add("field-error");
                msg.style.display = "block";
                formIsValid = false;
            }
        });

        if (formIsValid) {
            this.submit();
        }
    });

</script>

{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxqohTB1YdsTzoFQlrm1xm1Q9E2td60Fg&libraries=places"></script> --}}

<script>
    function initAutocomplete() {

        function formatUSAddress(place) {
            if (!place.address_components) return place.formatted_address || "";

            let street = "";
            let city = "";
            let state = "";
            let zip = "";

            place.address_components.forEach(c => {
                if (c.types.includes("street_number")) street = c.long_name + " " + street;
                if (c.types.includes("route")) street += c.long_name;
                if (c.types.includes("locality")) city = c.long_name;
                if (c.types.includes("administrative_area_level_1")) state = c.short_name;
                if (c.types.includes("postal_code")) zip = c.long_name;
            });

            let parts = [];
            if (street) parts.push(street.trim());
            if (city) parts.push(city);
            if (state) parts.push(state);
            if (zip) parts.push(zip);

            if (parts.length > 0) {
                return parts.join(", ") + ", USA";
            }

            return place.formatted_address || "";
        }

        const allowedCounties = [
            "Los Angeles County"
            , "Orange County"
            , "Riverside County"
            , "San Bernardino County"
            , "San Diego County"
        ];

        function isInsideAllowedCounty(place) {
            if (!place.address_components) return false;

            let county = "";

            place.address_components.forEach(component => {
                if (component.types.includes("administrative_area_level_2")) {
                    county = component.long_name;
                }
            });

            return allowedCounties.includes(county);
        }

        // === PICKUP ADDRESS ===
        const pickupInput = document.getElementById("pickup_address");
        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, {
            types: ["geocode"]
            , componentRestrictions: {
                country: "us"
            }
        });

        pickupAutocomplete.addListener("place_changed", function() {
            const place = pickupAutocomplete.getPlace();

            if (!isInsideAllowedCounty(place)) {
                alert(
                    "Sorry, we only provide pick-up service in:\n\n" +
                    "Los Angeles County\n" +
                    "Orange County\n" +
                    "Riverside County\n" +
                    "San Bernardino County\n" +
                    "San Diego County"
                );
                pickupInput.value = "";
                return;
            }

            pickupInput.value = formatUSAddress(place);
        });

        // === DESTINATION ADDRESS ===
        const dropoffInput = document.getElementById("destination_address");
        const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput, {
            types: ["geocode"]
            , componentRestrictions: {
                country: "us"
            }
        });

        dropoffAutocomplete.addListener("place_changed", function() {
            const place = dropoffAutocomplete.getPlace();
            dropoffInput.value = formatUSAddress(place);
        });
    }

    google.maps.event.addDomListener(window, "load", initAutocomplete);

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // === DATE ===
        const dateInput = document.getElementById("date");
        let today = new Date().toISOString().split("T")[0];

        dateInput.min = today;
        dateInput.value = today;

        // === TIME ===
        const timeInput = document.getElementById("time");

        timeInput.addEventListener("change", function() {
            let value = this.value;

            if (value < "05:00") {
                alert("Time must be after 5:00 AM");
                this.value = "05:00";
            }

            if (value > "22:00") {
                alert("Time must be before 10:00 PM");
                this.value = "22:00";
            }
        });
    });

</script>




@endsection
