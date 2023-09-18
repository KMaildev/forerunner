@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')

    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/about-us-banner-desktop-1.webp') }})">
            <div class="auto-container">
                <h1>
                    About Us
                </h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>About of Our Company</li>
        </ul>
    </section>


    <section class="experiance-section-two style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">
                                We are one of the best oversea employment agency in myanmar.
                            </div>
                            <h2>
                                FORERUNNER MYANMAR
                                <span>
                                    COMPANY LIMITED.
                                </span>
                            </h2>
                            <div class="text" style="text-align: justify">
                                <span style="color: black;">FORERUNNER MYANMAR COMPANY LIMITED</span> is an overseas
                                employment agency based in Myanmar,
                                connecting job seekers with international work opportunities. They specialize in
                                recruitment, visa assistance, pre-departure orientation, and practical arrangements such as
                                travel and accommodation. It's important for candidates to research agencies like Forerunner
                                Myanmar Company Limited for credibility and suitability before pursuing overseas employment
                                through them.
                            </div>
                        </div>

                        <div class="fact-counter style-three">
                            <div class="row clearfix">

                                <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon flaticon-helmet"></div>
                                            <div class="count-outer count-box alternate">
                                                <span class="count-text" data-speed="5000" data-stop="4">0</span>+
                                            </div>
                                            <h4 class="counter-title">
                                                Sending Country
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon flaticon-blueprint"></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="1">0</span>K
                                            </div>
                                            <h4 class="counter-title">
                                                Sending Labour
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="year-box">
                            <div class="count-box">
                                1<span class="count-text" data-speed="5000" data-stop="0">0</span>
                            </div>
                            <span class="years">Years</span>
                        </div>
                        <div class="image">
                            <img src="{{ asset('data/about.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
