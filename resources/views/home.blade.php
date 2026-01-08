@extends('layouts.index')

@section('content')
        <!-- Hero section -->
        <section class="banner-section p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">

                <!-- Slide 1 -->
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner1.png);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>HALO MEDICAL TRANSPORT</h2>

                            <p>Reliable Non-Emergency Medical Transportation You Can Trust<br>
                                Serving Orange County, Riverside, San Bernardino, and Los Angeles with safe,
                                compassionate, and professional transportation for seniors and individuals with mobility
                                challenges.
                            </p>

                            <div class="btn-box" style="display:flex; gap:15px; flex-wrap:wrap;">
                                <a href="{{ route('contact') }}" class="theme-btn btn-one">Book a Ride</a>
                                <a href="tel:XXX-XXX-XXXX" class="theme-btn btn-one"
                                    style="background:#0b3752; color:#ffffff; border:2px solid #fff;">
                                    Call Dispatch: (XXX) XXX-XXXX
                                </a>
                            </div>

                            <p style="margin-top:15px; font-size:16px; color:#fff;">
                                Available 7 days a week. Same-day scheduling may be available.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner1.png);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>HALO MEDICAL TRANSPORT</h2>

                            <p>Reliable Non-Emergency Medical Transportation You Can Trust<br>
                                Serving Orange County, Riverside, San Bernardino, and Los Angeles with safe,
                                compassionate, and professional transportation for seniors and individuals with mobility
                                challenges.
                            </p>

                            <div class="btn-box" style="display:flex; gap:15px; flex-wrap:wrap;">
                                <a href="{{ url('/contact') }}" class="theme-btn btn-one">Book a Ride</a>

                                <a href="tel:XXX-XXX-XXXX" class="theme-btn btn-one"
                                    style="background:#0b3752; color:#ffffff; border:2px solid #fff;">
                                    Call Dispatch: (XXX) XXX-XXXX
                                </a>
                            </div>

                            <p style="margin-top:15px; font-size:16px; color:#fff;">
                                Available 7 days a week. Same-day scheduling may be available.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner1.png);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>HALO MEDICAL TRANSPORT</h2>

                            <p>Reliable Non-Emergency Medical Transportation You Can Trust<br>
                                Serving Orange County, Riverside, San Bernardino, and Los Angeles with safe,
                                compassionate, and professional transportation for seniors and individuals with mobility
                                challenges.
                            </p>

                            <div class="btn-box" style="display:flex; gap:15px; flex-wrap:wrap;">
                                <a href="#" class="theme-btn btn-one">Book a Ride</a>
                                <a href="tel:XXX-XXX-XXXX" class="theme-btn btn-one"
                                    style="background:#0b3752; color:#ffffff; border:2px solid #fff;">
                                    Call Dispatch: (XXX) XXX-XXXX
                                </a>
                            </div>

                            <p style="margin-top:15px; font-size:16px; color:#fff;">
                                Available 7 days a week. Same-day scheduling may be available.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- banner-section end -->


        <!-- support-center -->
        <!-- <div class="support-center">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-support-box">
                                <div class="inner-box">
                                    <i class="icon-9"></i>
                                    <h5>For Booking:</h5>
                                    <a href="tel:912345432">+91 (234) 5432</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-support-box">
                                <div class="inner-box">
                                    <i class="icon-9"></i>
                                    <h5>For Reserve:</h5>
                                    <a href="tel:912345433">+91 (234) 5433</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                            <div class="single-support-box">
                                <div class="inner-box">
                                    <i class="icon-10"></i>
                                    <h5>For Information:</h5>
                                    <a href="tel:912345431">+91 (234) 5431</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- support-center end -->


        <!-- about-INDEX-section -->
        <section class="about-section pt_90 pb_120">
            {{-- <figure class="image-layer"><img src="assets/images/resource/ambulance-1.png" alt=""></figure> --}}
            <div class="auto-container">
                <div class="row align-items-center">

                    <!-- Image Column -->
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box pr_90">
                                <figure class="image image-hov-one">
                                    <img src="assets/images/resource/about-1.jpg" alt="">
                                </figure>
                                <div class="rotate-box">
                                    <span class="curved-circle">
                                        Halo Medical Transport&nbsp;&nbsp;-&nbsp;&nbsp;Safe Transport&nbsp;&nbsp;-&nbsp;&nbsp;
                                    </span>
                                    <div class="icon-box">
                                        <img src="assets/images/icons/icon-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box ml_50">

                                <div class="sec-title mb_30">
                                    <span class="sub-title mb_12">Who We Are</span>
                                    <h2>Halo Medical Transport</h2>
                                </div>

                                <!-- NEW CONTENT (NO TABS) -->
                                <div class="text-content">
                                    <ul class="list-style-one clearfix">

                                        <li>
                                            <strong>Licensed & Insured</strong><br>
                                            Fully compliant NEMT provider serving all of Southern California.
                                        </li>

                                        <li>
                                            <strong>ADA-Compliant Vehicles</strong><br>
                                            Equipped with wheelchair lifts, ramps, and securement systems.
                                        </li>

                                        <li>
                                            <strong>Background-Checked Drivers</strong><br>
                                            CPR-certified, safety-trained, and professional.
                                        </li>

                                        <li>
                                            <strong>On-Time Guarantee</strong><br>
                                            We specialize in punctual, time-sensitive medical transportation.
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- about-section end -->

        <!-- brand-section -->
        <section class="brand-section">
    <div class="auto-container">
        <div class="brand-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

            <div class="brand-logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/brand/brand-1.png') }}" alt="">
                </a>
            </div>

            <div class="brand-logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                </a>
            </div>

            <div class="brand-logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                </a>
            </div>

        </div>
    </div>
</section>

        <!-- brand-section end -->


        <!-- service-section -->
        <section class="service-preview pt_120 pb_90">
            <div class="auto-container">

                <!-- SECTION TITLE -->
                <div class="sec-title centred mb_50">
                    <span class="sub-title mb_12">Our Services</span>
                    <h2>Dependable Non-Emergency Medical Transportation</h2>
                    <p class="mt_10">
                        At Halo Medical Transportation, we provide reliable NEMT solutions tailored to the unique
                        medical and mobility needs of patients across Southern California.
                    </p>
                </div>

                <!-- SERVICE PREVIEW GRID -->
                <div class="row gutter-y-30">

                    <!-- Wheelchair Transportation -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-wheelchair"></i></div>
                                <h3>Wheelchair Transportation</h3>
                                <p>ADA vans with securements, lifts, and careful rider assistance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Ambulatory Rides -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-walking"></i></div>
                                <h3>Ambulatory Rides</h3>
                                <p>Comfortable transport for riders who can walk with minimal assistance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stretcher Transport -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-procedures"></i></div>
                                <h3>Gurney / Stretcher Transport</h3>
                                <p>Safe stretcher service for clients requiring transport while lying down.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Long Distance -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-route"></i></div>
                                <h3>Long-Distance / Private Pay</h3>
                                <p>Comfortable medical transport across counties and extended ranges.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hospital Discharge -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-hospital-user"></i></div>
                                <h3>Hospital Discharge Transport</h3>
                                <p>Prompt bedside pickups for scheduled or same-day discharges.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Facility Partnerships -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-handshake"></i></div>
                                <h3>Facility Partnerships</h3>
                                <p>Custom scheduling solutions for hospitals, clinics, SNFs, and assisted living.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- VIEW ALL SERVICES BUTTON -->
                <div class="centred mt_40" style="text-align:center;">
                    <a href="/services" class="theme-btn btn-one">View All Services</a>
                </div>

            </div>
        </section>



        <!-- =============================================== -->
        <!-- WHO WE SERVE -->
        <!-- =============================================== -->
        <section class="chooseus-section pt_120 pb_90">
            <div class="auto-container">

                <div class="sec-title centred mb_50">
                    <span class="sub-title mb_12">Who We Serve</span>
                    <h2>Compassionate Support for Patients & Healthcare Partners</h2>
                </div>

                <div class="row gutter-y-30">

                    <!-- Seniors -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-user-friends"></i></div>
                                <h3>Seniors & Adults with Mobility Needs</h3>
                                <p>Dependable rides for doctor visits, therapy sessions, social outings, and
                                    independence support.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hospitals -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-hospital"></i></div>
                                <h3>Hospitals & Medical Facilities</h3>
                                <p>Streamlined discharge planning and appointment coordination that reduces delays.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Recurring Appointments -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="chooseus-block-one" style="padding:30px;">
                            <div class="inner-box">
                                <div class="icon-box red-circle"><i class="fas fa-calendar-check"></i></div>
                                <h3>Recurring Medical Appointments</h3>
                                <p>Precision scheduling for dialysis, physical therapy, radiation, infusions, and more.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
 <br><br><br>
        <!-- =============================================== -->
        <!-- ANIMATION BOX -->
        <!-- =============================================== -->

        {{-- <div class="animation-box">
            <div class="shape">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
                <div class="shape-3"></div>
                <div class="shape-4"></div>
            </div>
            <figure class="image-box p_absolute r_0 b_0"><img src="assets/images/resource/resized_150x267.png" alt="">
            </figure>
        </div> --}}


        <!-- =============================================== -->
        <!-- CHOOSE US -->
        <!-- =============================================== -->
        <section class="chooseus-section centred pt_120 pb_90">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url(assets/images/background/back1.png);"></div>

            <div class="auto-container">
                <div class="sec-title centred light mb_50">
                    <span class="sub-title mb_12">Features</span>
                    <h2>Why Choose Us</h2>
                </div>

                <div class="row clearfix">

                    <!-- Compassionate Staff -->
                    <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box red-circle">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Compassionate Staff</h3>
                                <p>We treat every rider with patience, dignity, and personalized care.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Clean, Modern Vehicles -->
                    <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box red-circle">
                                    <i class="fas fa-car-side"></i>
                                </div>
                                <h3>Clean, Modern Vehicles</h3>
                                <p>Our ADA-compliant fleet is sanitized daily and inspected regularly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fast Response Times -->
                    <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box red-circle">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h3>Fast Response Times</h3>
                                <p>Efficient dispatching ensures timely pickups for scheduled and urgent needs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Reliable Scheduling -->
                    <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box red-circle">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <h3>Reliable Scheduling</h3>
                                <p>Perfect for recurring dialysis, therapy, and doctor’s appointments.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- style for Why Choose Us -->
        <style>
            /* Make icons match original theme style */
            .red-circle {
                width: 130px;
                height: 130px;
                border-radius: 50%;
                background: #0b3752;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 55px;
                color: white;
                margin: 0 auto 25px;
            }

            /* Make card sizes consistent */
            .chooseus-block-one {
                padding: 40px 30px;
                border-radius: 20px;
                background: #fff;
                height: 450px;
                /* identical height */
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            }

            .chooseus-block-one h3 {
                margin-bottom: 15px;
                font-size: 22px;
                font-weight: 600;
            }

            .chooseus-block-one p {
                font-size: 15px;
                line-height: 1.6;
                color: #666;
            }
        </style>


        <!-- =============================================== -->
        <!-- COVERAGE AREA MAP -->
        <!-- =============================================== -->
        <section class="about-section pt_90 pb_120">
            <div class="auto-container">

                <div class="sec-title centred mb_40">
                    <span class="sub-title mb_12">Coverage Area</span>
                    <h2>Serving All of Southern California</h2>
                </div>

                <div class="row align-items-center">

                    <!-- MAP IMAGE -->
                    <div class="col-lg-6 col-md-12">
                        <img src="assets/images/resource/ambulance-5.png" alt="Coverage Map"
                            style="width:100%; border-radius:12px;">
                    </div>

                    <!-- COVERAGE LIST -->
                    <div class="col-lg-6 col-md-12">
                        <ul class="list-style-one clearfix">

                            <li>
                                <strong>Orange County</strong><br>
                                Irvine, Anaheim, Santa Ana, Mission Viejo, Fullerton & more
                            </li>

                            <li>
                                <strong>Riverside County</strong><br>
                                Riverside, Corona, Murrieta, Temecula, Palm Desert & nearby cities
                            </li>

                            <li>
                                <strong>San Bernardino County</strong><br>
                                San Bernardino, Fontana, Redlands, Ontario, Highland & more
                            </li>

                            <li>
                                <strong>Los Angeles County</strong><br>
                                Los Angeles, Long Beach, Torrance, Pasadena, Glendale & surrounding areas
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </section>


        <!-- STYLES for uppp(matching your theme) -->
        <style>
            .red-circle {
                width: 110px;
                height: 110px;
                border-radius: 50%;
                background: #0b3752;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 45px;
                color: #fff;
                margin: 0 auto 20px;
            }
        </style>


        <!-- service-section end -->


        <!-- funfact-section -->
        <section class="funfact-section pb_180 centred">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="13">00</span><span class="symble">K+</span>
                                    </div>
                                    <p>Patients Served</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="30">00</span>&nbsp;<span
                                            class="symble">+</span>
                                    </div>
                                    <p>Operation Bases</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="100">00</span>&nbsp;<span
                                            class="symble">+</span>
                                    </div>
                                    <p>Specialised Vehicles</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="300">00</span>&nbsp;<span
                                            class="symble">+</span>
                                    </div>
                                    <p>Frontline Staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->





        <!-- processing-section -->
        <!-- <section class="processing-section centred pt_120 pb_120">
            <div class="auto-container">
                <div class="sec-title mb_50">
                    <span class="sub-title mb_12">Process</span>
                    <h2>How to get Service</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span>Step-01</span>
                                    <h3>Call at Hotline</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span>Step-02</span>
                                    <h3>Describe Matter</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span>Step-03</span>
                                    <h3>Set Direction</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 processing-block">
                            <div class="processing-block-one">
                                <div class="inner-box">
                                    <span>Step-04</span>
                                    <h3>Get Ambulance</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- processing-section end -->





        <!-- category-section -->
        <!-- <section class="category-section">
            <div class="auto-container">
                <div class="inner-container pt_120 pb_90">
                    <div class="sec-title centred mb_50">
                        <span class="sub-title mb_12">Ambulance</span>
                        <h2>Ambulance Category</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 category-block">
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="bg-layer"
                                        style="background-image: url(assets/images/resource/category-1.jpg);"></div>
                                    <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                    <span class="big-text">Amcare</span>
                                    <h2>Type VII</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                    <div class="btn-box"><a href="index.html">Get a Quote</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 category-block">
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="bg-layer"
                                        style="background-image: url(assets/images/resource/category-2.jpg);"></div>
                                    <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                    <span class="big-text">Amcare</span>
                                    <h2>Type Axta 440</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                    <div class="btn-box"><a href="index.html">Get a Quote</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 category-block">
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="bg-layer"
                                        style="background-image: url(assets/images/resource/category-3.jpg);"></div>
                                    <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                    <span class="big-text">Amcare</span>
                                    <h2>Vanguard 320</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                    <div class="btn-box"><a href="index.html">Get a Quote</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 category-block">
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="bg-layer"
                                        style="background-image: url(assets/images/resource/category-4.jpg);"></div>
                                    <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                    <span class="big-text">Amcare</span>
                                    <h2>Firebox ICU+</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur. Pellentesque semper pellentesque</p>
                                    <div class="btn-box"><a href="index.html">Get a Quote</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- category-section end -->


        <!-- faq-section -->
        <!-- <section class="faq-section pt_120 pb_120 z_1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_two">
                            <div class="image-box">
                                <div class="image-shape">
                                    <div class="shape-1"
                                        style="background-image: url(assets/images/shape/shape-2.png);"></div>
                                    <div class="shape-2"
                                        style="background-image: url(assets/images/shape/shape-2.png);"></div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image image-hov-one mt_100"><img
                                                src="assets/images/resource/faq-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image image-hov-two mb_30"><img
                                                src="assets/images/resource/faq-2.jpg" alt=""></figure>
                                        <div class="experience-box">
                                            <div class="year-box">
                                                <div class="inner">
                                                    <h2>25</h2>
                                                    <h5>Years</h5>
                                                </div>
                                            </div>
                                            <h4>of Experience in the Finance Service</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_two">
                            <div class="content-box ml_60">
                                <div class="sec-title mb_25">
                                    <span class="sub-title mb_12">General Faqs</span>
                                    <h2>Taking all your questions to reality.</h2>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>What types of medical emergencies do you handle?</h4>
                                            <div class="icon-box"><i class="icon-16"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Our ambulance service is equipped to handle a wide range of medical
                                                    emergencies, including trauma.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <h4>What equipment do your ambulances carry?</h4>
                                            <div class="icon-box"><i class="icon-16"></i></div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>Our ambulance service is equipped to handle a wide range of medical
                                                    emergencies, including trauma.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Do you provide inter-facility transfers?</h4>
                                            <div class="icon-box"><i class="icon-16"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Our ambulance service is equipped to handle a wide range of medical
                                                    emergencies, including trauma.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <h4>Are your services covered by insurance?</h4>
                                            <div class="icon-box"><i class="icon-16"></i></div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Our ambulance service is equipped to handle a wide range of medical
                                                    emergencies, including trauma.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- faq-section end -->


        <!-- cta-section -->
        <!-- <section class="cta-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="bubble-shape">
                <div class="bubble bubble-1"></div>
                <div class="bubble bubble-2"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative pt_110 pb_100">
                    <div class="bubble-shape">
                        <div class="bubble bubble-3"></div>
                        <div class="bubble bubble-4"></div>
                    </div>
                    <span class="big-text">Hotline</span>
                    <div class="text-box">
                        <h2>Find out Why Patients Trust Our Ambulance</h2>
                        <a href="tel:12463330089">+ 1- (246) 333-0089</a>
                    </div>
                    <figure class="image-box"><img src="assets/images/resource/cta-1.jpg" alt=""></figure>
                </div>
            </div>
        </section> -->
        <!-- cta-section end -->


        <!-- news-section -->
        {{-- <section class="news-section pt_160 pb_90 z_1">
            <div class="auto-container">
                <div class="sec-title centred mb_50">
                    <span class="sub-title mb_12">Latest News</span>
                    <h2>Media and Journal</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img
                                                    src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                        <figure class="overlay-image"><a href="blog-details.html"><img
                                                    src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 12,2024</li>
                                        </ul>
                                        <h4><a href="blog-details.html">Emergency medical repatriation when time is of
                                                the essence</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img
                                                    src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                        <figure class="overlay-image"><a href="blog-details.html"><img
                                                    src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 11,2024</li>
                                        </ul>
                                        <h4><a href="blog-details.html">Repatriation Stories Spain to Ireland with a
                                                medical escort</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img
                                                    src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                        <figure class="overlay-image"><a href="blog-details.html"><img
                                                    src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><span>Business</span></li>
                                            <li>May 10,2024</li>
                                        </ul>
                                        <h4><a href="blog-details.html">International air ambulance Long distance
                                                patient transport</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- news-section end -->


        <!-- subscribe-section -->
        <!-- <section class="subscribe-section pt_45 pb_45">
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
        </section> -->
        <!-- subscribe-section end -->
@endsection
