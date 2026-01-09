@extends('layouts.index')

@section('content')


<!-- sidebar-page-container -->
<section class="sidebar-page-container pt_120 pb_120">
    <div class="auto-container">
        <div class="auto-container">
            <div class="sec-title mb_50 centred">
                <span class="sub-title mb_12">BLOG 1 </span>
            </div>
            <div class="row clearfix">

                <!-- MAIN CONTENT -->
                 <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content p_relative">

                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('assets/images/news/news-14.jpg') }}" alt="">
                                    </figure>
                                </div>

                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span>Air Ambulance</span></li>
                                        <li>May 16, 2024</li>
                                    </ul>

                                    <h2>International air ambulance Long distance patient transport Ambulance Innovations</h2>

                                    <div class="text-box">
                                        <p class="mb_30">
                                            International air ambulance services have revolutionized long-distance patient transport,
                                            offering critical care during flights across vast distances and international borders.
                                        </p>

                                        <p class="mb_40">
                                            Innovations in this field include enhanced telemedicine capabilities and advanced aircraft
                                            medical equipment improving efficiency and safety.
                                        </p>

                                        {{-- <blockquote>
                                            <div class="icon-box"><i class="icon-52"></i></div>
                                            <p>
                                                "The international air ambulance service was a lifesaver. The medical team was professional."
                                            </p>
                                            <h6>Brooklyn Simmons</h6>
                                        </blockquote> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="content-one">
                            <h3>Latest News</h3>

                            <p class="mb_55">
                                Innovations include telemedicine support and real-time medical monitoring during flight.
                            </p>

                            <div class="video-content" style="background-image: url('{{ asset('assets/images/news/news-19.jpg') }}');">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&t=28s" class="lightbox-image">
                                        <i class="icon-49"></i>
                                    </a>
                                </div>
                            </div>

                            <p class="mt_55">
                                Air ambulances ensure continuous, high-level care throughout the journey with advanced ICU equipment.
                            </p>
                        </div> --}}

                        {{-- <div class="post-share-option pt_55 pb_30">
                            <ul class="tags-list">
                                <li><span>Tags:</span></li>
                                <li><a href="#">Air Ambulance</a></li>
                                <li><a href="#">Emergency Transport</a></li>
                                <li><a href="#">Ambulance</a></li>
                            </ul>
                        </div> --}}

                    </div>
                </div>

                <!-- SIDEBAR -->
                {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar ml_30">

                        <div class="sidebar-widget post-widget mb_55">
                            <div class="widget-title mb_25">
                                <h3>Latest News</h3>
                            </div>

                            <div class="post">
                                <figure class="post-thumb">
                                    <img src="{{ asset('assets/images/news/post-1.jpg') }}" alt="">
                                </figure>
                                <article>
                                    <h5>International air ambulance Long</h5>
                                    <span class="post-date">20 Aug, 2024</span>
                                </article>
                            </div>

                            <div class="post">
                                <figure class="post-thumb">
                                    <img src="{{ asset('assets/images/news/post-2.jpg') }}" alt="">
                                </figure>
                                <article>
                                    <h5>Mental health care after a medical</h5>
                                    <span class="post-date">19 Aug, 2024</span>
                                </article>
                            </div>

                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
</section>
<!-- sidebar-page-container end -->

@endsection
