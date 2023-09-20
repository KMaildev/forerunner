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



    <section class="solution-section" style="background-image:url({{ asset('data/our-team.svg') }})">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>
                                Our Vision & Mission
                            </h2>
                            <div class="text">
                                FORERUNNER MYANMAR CO.,LTD
                            </div>
                        </div>
                        <!-- Button Box -->
                        <div class="button-box">
                            <a class="btn-style-two theme-btn" href="{{ route('contact.index') }}">
                                <span class="txt">
                                    Contact Us
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box">
                                <span class="icon flaticon-helmet-2"></span>
                                <h4>
                                    Our Mission
                                </h4>
                                <div class="text">
                                    <ul class="list-style-two">
                                        <li style="font-size: 14px;">
                                            Our mission is to generate consistent and
                                            sustainable return for our investors.
                                        </li>

                                        <li style="font-size: 14px;">
                                            To achieve the objective, we continue to practice the values that stand at the
                                            core of
                                            our professional philosophy...
                                        </li>

                                        <li style="font-size: 14px;">
                                            Excellence in investment technique along with the best of personnel in the
                                            industry
                                            allows us to achive consistent top quality in all our endeavors.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block">
                            <div class="inner-box">
                                <span class="icon flaticon-office-building"></span>
                                <h4>
                                    Our Vision
                                </h4>
                                <div class="text">
                                    Our company is the best service company in our country and than we will do with other
                                    international company

                                    <ul class="list-style-two">
                                        <li style="font-size: 14px;">
                                            Our Objective
                                        </li>

                                        <li style="font-size: 14px;">
                                            Trading of fuels
                                        </li>

                                        <li style="font-size: 14px;">
                                            IT Solution
                                        </li>

                                        <li style="font-size: 14px;">
                                            Travel and Tours
                                        </li>

                                        <li style="font-size: 14px;">
                                            Construction
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="container py-5">
        <div class="row clearfix">
            <div class="col-md-12">
                <h5>
                    INTRODUCTION
                </h5>
                <p>
                    Founded in 2020 July 30, Future Golden wings conpany is doing construction work, travel and
                    tour, trading and other service.
                    The company offices have in Yangon city and Mandalay city.
                </p>

                <div class="text">
                    <style>
                        .table {
                            border-collapse: collapse;
                            border: 1px solid black;
                            width: 100%;
                        }

                        th,
                        tr,
                        td {
                            border: 1px solid black;
                        }
                    </style>
                    <table class="table">
                        <thead>
                            <tr>
                                <td width="30%" style="background-color: #e3e4ef; color: black;">
                                    Company Name
                                </td>
                                <td>
                                    Forerunner Myanmar Co.,Ltd.
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #f7f2f2; color: black;">
                                    Company Number
                                </td>
                                <td>
                                    1092
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #e3e4ef; color: black;">
                                    Company Type
                                </td>
                                <td>
                                    Private Limited
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #f7f2f2; color: black;">
                                    Date Of Incorporating
                                </td>
                                <td>
                                    2020 July 30
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #e3e4ef; color: black;">
                                    Date of Registrations
                                </td>
                                <td>
                                    2020 July 30
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #f7f2f2; color: black;">
                                    Date of Update
                                </td>
                                <td>
                                    2025 July 29
                                </td>
                            </tr>

                            <tr>
                                <td width="20%" style="background-color: #e3e4ef; color: black;">
                                    Registered Office
                                </td>
                                <td>
                                    The Government of the Republic of the Union of Myanmar. Ministry of Planning and
                                    Finanace, Yangon.
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #f7f2f2; color: black;">
                                    Business Address
                                </td>
                                <td>
                                    Room (803), Building (C), Yadanar Housing, Yadana Road, (13) Block, South Okkalarpa
                                    Township, Yangon, Myanmar.
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #e3e4ef; color: black;">
                                    Business Phone
                                </td>
                                <td>
                                    +959 421 008 271,+959 5 085 559
                                </td>
                            </tr>

                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <section class="team-section"
        style="background-image:url({{ asset('assets/assets/images/background/pattern-1.png') }})">
        <div class="auto-container">
            <div class="sec-title centered">
                <span class="icon flaticon-telephone"></span>
                <h2>LEGAL
                    <span>DOCUMENTS</span>
                </h2>
                <div class="text">
                    We are one of the best oversea employment agency in myanmar.
                </div>
            </div>

            <div class="product-info-tabs">
                <div class="team-tabs tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#team-1" class="tab-btn active-btn">
                            <span class="number">1.</span>
                            Certificate of Incorporation
                            <i>
                                Company registration
                            </i>
                        </li>
                        <li data-tab="#team-2" class="tab-btn">
                            <span class="number">2.</span>
                            Company Licence
                            <i>
                                Front
                            </i>
                        </li>
                        <li data-tab="#team-3" class="tab-btn">
                            <span class="number">3.</span>
                            Company Licence
                            <i>
                                Back
                            </i>
                        </li>
                        <li data-tab="#team-4" class="tab-btn">
                            <span class="number">4.</span>
                            MOEAF Certificate
                            <i>
                                Myanmar Overseas Employment Agencies Federation
                            </i>
                        </li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab / Active Tab -->
                        <div class="tab active-tab" id="team-1">
                            <div class="content">
                                <div class="row clearfix">
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{ asset('data/c1.png') }}" alt=""
                                                style="width: 100%; height: 500px; background-size: cover; object-fit: cover; object-position: top;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="team-2">
                            <div class="content">
                                <div class="row clearfix">
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{ asset('data/c2.png') }}" alt=""
                                                style="width: 100%; height: 500px; background-size: cover; object-fit: cover; object-position: top;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="team-3">
                            <div class="content">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{ asset('data/c3.png') }}" alt=""
                                                style="width: 100%; height: 500px; background-size: cover; object-fit: cover; object-position: top;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="team-4">
                            <div class="content">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{ asset('data/c4.png') }}" alt=""
                                                style="width: 100%; height: 500px; background-size: cover; object-fit: cover; object-position: top;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
