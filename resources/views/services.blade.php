@extends('layouts.index')

@section('content')

<section class="service-section pt_120">
            <div class="auto-container">

                <div class="sec-title mb_50 centred">
                    <span class="sub-title mb_12">Our Services</span>
                    <h2>Non-Emergency Medical Transportation</h2>
                </div>

                <div class="tabs-box">

                    <!-- TAB BUTTONS (ALL IN ONE LINE) -->
                    <div class="tab-btn-box">
                        <div class="tab-btns tab-buttons clearfix"
                            style="display:flex; justify-content:space-between; gap:10px; flex-wrap:nowrap;">
                            <div class="tab-btn active-btn" data-tab="#tab-wheelchair">Wheelchair Transport</div>
                            <div class="tab-btn" data-tab="#tab-ambulatory">Ambulatory Transport</div>
                            <div class="tab-btn" data-tab="#tab-stretcher">Gurney / Stretcher</div>
                            <div class="tab-btn" data-tab="#tab-discharge">Hospital Discharge</div>
                            <div class="tab-btn" data-tab="#tab-ift">Interfacility Transfers</div>
                        </div>
                    </div>

                    <div class="tabs-content">
                        <div class="shape" style="background-image:url(assets/images/shape/shape-1.png);"></div>


                        <!-- ========================================================= -->
                        <!-- TAB 1: WHEELCHAIR TRANSPORT -->
                        <!-- ========================================================= -->
                        <div class="tab active-tab" id="tab-wheelchair">
                            <div class="row align-items-center">

                                <!-- CONTENT -->
                                <div class="col-lg-6 col-md-12 content-column">
                                    <div class="content-box">

                                        <h2>Wheelchair Transportation Services</h2>
                                        <p>
                                            Our wheelchair transportation service ensures safe, accessible, and
                                            stress-free transportation for
                                            riders throughout Southern California. Whether you’re heading to a medical
                                            appointment, a
                                            physical therapy session, dialysis, or a hospital follow-up, our drivers are
                                            trained to provide
                                            gentle door-to-door assistance every step of the way.
                                        </p>

                                        <h4>What’s Included</h4>
                                        <ul class="list-style-one clearfix">
                                            <li><b>Door-to-Door Assistance</b><br>From your home entrance to vehicle
                                                boarding and safe arrival at your destination.</li>
                                            <li><b>ADA-Compliant Vans</b><br>Equipped with lifts, ramps, and all
                                                required accessibility features.</li>
                                            <li><b>Trained & Certified Drivers</b><br>CPR-certified, background-checked,
                                                and experienced in mobility care.</li>
                                            <li><b>Secure Wheelchair Locks</b><br>Ensuring stability and safety
                                                throughout the ride.</li>
                                        </ul>

                                        <h4>Perfect For:</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Dialysis appointments</li>
                                            <li>Hospital discharge transportation</li>
                                            <li>Assisted living & skilled nursing visits</li>
                                            <li>Physical therapy & rehabilitation</li>
                                            <li>Routine medical check-ups</li>
                                            <li>Long-distance medical travel</li>
                                        </ul>

                                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Book Your Ride</a>

                                    </div>
                                </div>

                                <!-- IMAGES (ORIGINAL LAYOUT) -->
                                <div class="col-lg-6 col-md-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one">
                                            <img src="assets/images/service/service-1.jpg" alt="">
                                        </figure>
                                        <figure class="image image-2 image-hov-two">
                                            <img src="assets/images/service/service-2.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- ========================================================= -->
                        <!-- TAB 2: AMBULATORY TRANSPORT -->
                        <!-- ========================================================= -->
                        <div class="tab" id="tab-ambulatory">
                            <div class="row align-items-center">

                                <!-- CONTENT -->
                                <div class="col-lg-6 col-md-12 content-column">
                                    <div class="content-box">

                                        <h2>AMBULATORY TRANSPORTATION SERVICES</h2>
                                        <p>(Non-emergency, walk-on medical transport)</p>

                                        <p>
                                            Our Ambulatory Transportation service is ideal for riders who can walk with
                                            or without
                                            minimal assistance but require a safe, reliable, and medically aware driver
                                            to ensure they arrive
                                            at appointments on time. We specialize in transporting seniors, adults
                                            recovering from surgery,
                                            and individuals who shouldn’t drive due to medical conditions.
                                        </p>

                                        <h4>What’s Included</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Curb-to-curb or door-to-door assistance</li>
                                            <li>Help with walking, steps, or steadying as needed</li>
                                            <li>Comfortable sedans or SUVs</li>
                                            <li>Drivers trained in patient handling and fall-prevention</li>
                                            <li>Flexible scheduling for one-time or recurring appointments</li>
                                        </ul>

                                        <h4>Perfect For:</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Primary care visits</li>
                                            <li>Specialist appointments</li>
                                            <li>Outpatient procedures</li>
                                            <li>Pharmacy or lab visits</li>
                                            <li>Routine check-ups</li>
                                            <li>Follow-up care after surgery</li>
                                        </ul>

                                        <h4>Why Choose Ambulatory Transport vs. Rideshare</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Our drivers are CPR-certified</li>
                                            <li>Trained in mobility support</li>
                                            <li>Familiar with hospital/clinic procedures</li>
                                            <li>Provide assistance instead of “curb-only” drop-offs</li>
                                            <li>Understand sensitivity around medical conditions</li>
                                        </ul>

                                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Schedule Ambulatory Transport</a>

                                    </div>
                                </div>

                                <!-- IMAGES -->
                                <div class="col-lg-6 col-md-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one">
                                            <img src="assets/images/service/service-22.jpg" alt="">
                                        </figure>
                                        <figure class="image image-2 image-hov-two">
                                            <img src="assets/images/service/service-23.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- ========================================================= -->
                        <!-- TAB 3: GURNEY / STRETCHER TRANSPORT -->
                        <!-- ========================================================= -->
                        <div class="tab" id="tab-stretcher">
                            <div class="row align-items-center">

                                <!-- CONTENT -->
                                <div class="col-lg-6 col-md-12 content-column">
                                    <div class="content-box">

                                        <h2>GURNEY / STRETCHER TRANSPORT SERVICES</h2>
                                        <p>(For riders who must remain lying down)</p>

                                        <p>
                                            Our Gurney/Stretcher Transport Service provides safe, secure, non-emergency
                                            transportation
                                            for individuals who cannot sit upright during travel. This service is
                                            performed by a two-person
                                            crew trained in patient lifting, safe transfer practices, and stretcher
                                            security protocols.
                                        </p>

                                        <h4>What’s Included</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Skilled two-person transport crew</li>
                                            <li>Smooth, secure hydraulic stretcher systems</li>
                                            <li>Door-to-door or bedside-to-bedside assistance</li>
                                            <li>Proper lifting techniques to prevent injuries</li>
                                            <li>Secure vehicle restraints for stable transport</li>
                                            <li>Communication with family or facility staff throughout the ride</li>
                                        </ul>

                                        <h4>Ideal for Riders With:</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Severe mobility limitations</li>
                                            <li>Post-operative recovery</li>
                                            <li>Spinal injuries</li>
                                            <li>Chronic illness requiring lying-position travel</li>
                                            <li>Hospice or palliative care needs</li>
                                            <li>Long-distance medical transport requiring comfort</li>
                                        </ul>

                                        <h4>Facility-Level Standards</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Hospitals</li>
                                            <li>Rehabilitation centers</li>
                                            <li>Skilled nursing facilities</li>
                                            <li>Long-term care facilities</li>
                                            <li>Home care providers</li>
                                        </ul>

                                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Book Safe Stretcher Transport</a>

                                    </div>
                                </div>

                                <!-- IMAGES -->
                                <div class="col-lg-6 col-md-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one">
                                            <img src="assets/images/service/service-24.jpg" alt="">
                                        </figure>
                                        <figure class="image image-2 image-hov-two">
                                            <img src="assets/images/service/service-25.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- ========================================================= -->
                        <!-- TAB 4: HOSPITAL DISCHARGE -->
                        <!-- ========================================================= -->
                        <div class="tab" id="tab-discharge">
                            <div class="row align-items-center">

                                <!-- CONTENT -->
                                <div class="col-lg-6 col-md-12 content-column">
                                    <div class="content-box">

                                        <h2>HOSPITAL DISCHARGE TRANSPORTATION</h2>
                                        <p>(Same-day, scheduled, or urgent discharges)</p>

                                        <p>
                                            Discharges require punctual, safe, and organized transportation — and we
                                            specialize in helping
                                            hospitals transition patients home smoothly. Our team works directly with
                                            case managers and
                                            discharge planners to reduce delays and prevent overcrowding in departments.
                                        </p>

                                        <h4>What’s Included</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Bedside pickup — not curbside</li>
                                            <li>Patient assistance into vehicle</li>
                                            <li>Transportation home or to another facility</li>
                                            <li>Coordination with nurses, staff, and families</li>
                                            <li>Fast response times for urgent discharges</li>
                                            <li>Availability 7 days a week</li>
                                        </ul>

                                        <h4>Perfect For:</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Post-surgery discharges</li>
                                            <li>ER discharges</li>
                                            <li>Maternity discharges</li>
                                            <li>Behavioral health discharges (non-emergency)</li>
                                            <li>Short- or long-distance transfers</li>
                                        </ul>

                                        <h4>Benefits for Hospitals</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Improved discharge flow</li>
                                            <li>Reduced hallway boarding</li>
                                            <li>Better patient experience</li>
                                            <li>Increased staff efficiency</li>
                                            <li>Transparency for expected arrival times</li>
                                        </ul>

                                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Request Discharge Transport</a>

                                    </div>
                                </div>

                                <!-- IMAGES -->
                                <div class="col-lg-6 col-md-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one">
                                            <img src="assets/images/service/service-26.jpg" alt="">
                                        </figure>
                                        <figure class="image image-2 image-hov-two">
                                            <img src="assets/images/service/service-27.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- ========================================================= -->
                        <!-- TAB 5: INTERFACILITY TRANSFERS -->
                        <!-- ========================================================= -->
                        <div class="tab" id="tab-ift">
                            <div class="row align-items-center">

                                <!-- CONTENT -->
                                <div class="col-lg-6 col-md-12 content-column">
                                    <div class="content-box">

                                        <h2>INTERFACILITY TRANSFERS (IFTs)</h2>
                                        <p>(Safe, non-emergency transfers between medical facilities)</p>

                                        <p>
                                            Our Interfacility Transfer service supports hospitals, dialysis centers,
                                            skilled nursing facilities,
                                            and clinics that need reliable transportation for patients moving between
                                            care locations. We
                                            maintain a strong reputation for punctuality, communication, and high safety
                                            standards.
                                        </p>

                                        <h4>What’s Included</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Coordination between sending and receiving facilities</li>
                                            <li>HIPAA-compliant information handling</li>
                                            <li>Door-to-door or bedside-to-bedside assistance</li>
                                            <li>Wheelchair, ambulatory, or gurney options</li>
                                            <li>Real-time updates for staff</li>
                                            <li>Ability to handle recurring transfers or one-time needs</li>
                                        </ul>

                                        <h4>Common IFT Scenarios</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Transfer from hospital to skilled nursing</li>
                                            <li>Transfer to rehabilitation centers</li>
                                            <li>Dialysis center transfers</li>
                                            <li>Imaging or specialist appointments</li>
                                            <li>Movement between campuses of the same hospital</li>
                                            <li>Post-acute care transitions</li>
                                        </ul>

                                        <h4>Why Facilities Choose Us</h4>
                                        <ul class="list-style-one clearfix">
                                            <li>Predictable scheduling</li>
                                            <li>Reduced no-show rates</li>
                                            <li>Faster internal workflow</li>
                                            <li>Flexible transport options (wheelchair, stretcher, ambulatory)</li>
                                            <li>Professional drivers trained for clinical environments</li>
                                        </ul>

                                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Schedule an Interfacility Transfer</a>

                                    </div>
                                </div>

                                <!-- IMAGES (NOW FIXED + MATCHING OTHER SECTIONS) -->
                                <div class="col-lg-6 col-md-12 image-column">
                                    <div class="image-box pl_110 pb_50">
                                        <figure class="image image-1 image-hov-one">
                                            <img src="assets/images/service/service-24.jpg" alt="">
                                        </figure>
                                        <figure class="image image-2 image-hov-two">
                                             <img src="assets/images/service/service-25.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- tabs-content -->

                </div><!-- tabs-box -->

            </div>
        </section>
        <div style="height:120px;"></div>

@endsection
