@extends('layouts.index')

@section('content')

<!-- Careers Section -->
<section class="careers-section section-space" style="background: #f0f4f8; padding: 80px 0;">
    <div class="container">

        <!-- Intro -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="150ms">
                <div class="sec-title">
                    <div class="sec-title__top">
                        <div class="sec-title__shape"></div>
                        <h6 class="sec-title__tagline">Join Our Team |
NEMT Driver &
Dispatcher Careers
at OnSite
Transportation</h6>
                    </div>
                    <h3 class="sec-title__title mt-2">
                        Join a Team That Makes a Difference Every Day
                    </h3>
                </div>
                <p style="font-size: 1.05rem; color: #495057; line-height: 1.6; margin-top: 20px;">
                   We're hiring professional drivers, dispatch coordinators, and fleet support staff across Southern California. Become part of a mission-driven company improving patient access to care.
                </p>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="150ms">
                <img src="assets/images/careers/careers-illustration.jpg" alt="Careers" class="img-fluid rounded shadow">
            </div>
        </div>

        <!-- Why Work With Us -->
        <div class="row mb-5">
            @php
                $benefits = [
                    'Competitive pay and benefits',
                    'A mission-driven company improving patient access to care',
                    'Training and credentialing provided (CPR, defensive driving, patient assistance)',
                    'Growth opportunities in operations, compliance, and fleet management',
                ];
            @endphp

            @foreach($benefits as $benefit)
                <div class="col-md-6 mb-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="careers-benefit-card" style="background:#ffffff; padding:20px 25px; border-radius:10px; display:flex; align-items-start; box-shadow:0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <i class="fas fa-check-circle text-primary me-3 fa-lg"></i>
                        <p class="mb-0" style="font-size:1rem; color:#495057;">{{ $benefit }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                <p style="font-size:1.1rem; color:#212529; line-height:1.6; margin-bottom:20px;">
                    Ready to join our team? Send your resume to
                    <a href="mailto:dispatch@onsitedrive.com" style="color:#00578d; font-weight:600;">dispatch@onsitedrive.com</a>
                    or call our HR desk for more information.
                </p>

                <div class="text-center">
                    <div class="taxi-booking__form__control taxi-booking__form__control--btn d-inline-block">
                        <a href="{{ route('careers.apply') }}" class="taxi-booking__form__btn cityride-btn d-flex align-items-center justify-content-center">
                            <span class="cityride-btn__icon"><i class="icon-front-car"></i></span>
                            <span>Apply Now</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
