@extends('layouts.index')

@section('content')

<section class="about-section pt_90 pb_120">
            {{-- <figure class="image-layer"><img src="assets/images/resource/ambulance-1.png" alt=""></figure> --}}
            <div class="auto-container">
                <div class="row align-items-center">

                    <!-- Image Column -->
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box pr_90">
                                <figure class="image image-hov-one"><img src="assets/images/resource/about-1.jpg"
                                        alt=""></figure>
                                <div class="rotate-box">
                                    <span class="curved-circle"> Halo Medical Transport&nbsp;&nbsp;-&nbsp;&nbsp;Safe Transport &nbsp;&nbsp;-&nbsp;&nbsp;</span>
                                    <div class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></div>
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

                                <div class="tabs-box">
                                    <!-- Tabs -->
                                    <div class="tab-btn-box">
                                        <div class="tab-btns tab-buttons">
                                            <div class="tab-btn active-btn" data-tab="#tab-1">Our Mission</div>
                                            <div class="tab-btn" data-tab="#tab-2">Our Story</div>
                                            <div class="tab-btn" data-tab="#tab-3">Safety & Compliance</div>
                                        </div>
                                    </div>

                                    <!-- Tabs Content -->
                                    <div class="tabs-content">

                                        <!-- TAB 1 – OUR MISSION -->
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="inner-box">
                                                <p>
                                                    At Halo Medical Transport, our mission is simple: provide safe,
                                                    compassionate,
                                                    and dependable NEMT services that give individuals access to the
                                                    care they need,
                                                    with dignity, comfort, and peace of mind.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- TAB 2 – OUR STORY -->
                                        <div class="tab" id="tab-2">
                                            <div class="inner-box">
                                                <p>
                                                    Halo began with a commitment to improving how patients travel to
                                                    their essential
                                                    medical appointments across Southern California. Too many families
                                                    struggled with
                                                    delayed pickups, missed treatments, and poor communication. We set
                                                    out to change that.
                                                </p>
                                                <p>
                                                    Today, we proudly serve thousands of riders across Orange County,
                                                    Riverside,
                                                    San Bernardino, and Los Angeles—partnering with healthcare
                                                    providers, senior communities,
                                                    and families who trust us to deliver consistent, patient-first
                                                    transportation.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- TAB 3 – SAFETY & COMPLIANCE -->
                                        <div class="tab" id="tab-3">
                                            <div class="inner-box">
                                                <p>Your safety is our top priority. We uphold rigorous standards,
                                                    including:</p>
                                                <ul class="list-style-one clearfix">
                                                    <li>ADA-compliant vehicles</li>
                                                    <li>HIPAA-safe communication</li>
                                                    <li>Daily vehicle sanitizing</li>
                                                    <li>CPR & First Aid certified drivers</li>
                                                    <li>Annual safety evaluations</li>
                                                    <li>Defensive driving training</li>
                                                    <li>State and federal NEMT compliance</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div> <!-- tabs-content -->
                                </div> <!-- tabs-box -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
