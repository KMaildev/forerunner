@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/network.jpg') }})">
            <div class="auto-container">
                <h1>Our Network</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>Our Network</li>
        </ul>
    </section>



    <section class="construction-section">
        <div class="side-image">
            <img style="width: 40%" src="{{ asset('data/public_jobseeker-job.svg') }}" alt="" />
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($countries as $c)
                    <div class="construction-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ $c->photo }}" alt=""
                                    style="width: 100%; height: 200px; background-size: top; object-fit: cover;" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <div class="years">
                                                {{ $c->jobs_count ?? 0 }} Job
                                            </div>
                                            <h2>
                                                <a href="{{ route('job.show', $c->id) }}">
                                                    {{ $c->country ?? '' }}
                                                </a>
                                            </h2>
                                            <a href="{{ route('job.show', $c->id) }}" class="read-more">
                                                Search jobs
                                                <span class="arrow fa fa-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="since-section"
        style="padding: 100px 0px 0px; background-image:url({{ asset('assets/images/background/pattern-3.png') }})">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Title Box -->
                        <div class="title-box">
                            <div class="title">
                                FORERUNNER MYANMAR CO.,LTD
                            </div>
                            <h2>
                                MANPOWER Supply
                            </h2>
                        </div>

                        <div class="button-box">
                            <a class="btn-style-three theme-btn" href="services.html">
                                <span class="txt">
                                    Contact Us
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">
                            <ul class="list-style-two">
                                <li>
                                    Sourcing and Advertising for the position in order to create a data base pool of
                                    qualified applicants.
                                </li>

                                <li>
                                    Pre-screening and verification of employment experience.
                                </li>

                                <li>
                                    Initial Interview process conducted by our experienced recruitment engineers related to
                                    the field.
                                </li>

                                <li>
                                    Categorization of applicants by rating and submission of final pool of applicants to
                                    client for final interview.
                                </li>

                                <li>
                                    Arrangement of extended medical and drug testing for final applicant pool Extended
                                    background checks (by village of origin) of applicants that are selected by the client.
                                </li>

                                <li>
                                    Processing Myanmar Government required documents for final selection of applicants on
                                    behalf of client.
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <style>
        .services-section-four:before {
            background-color: white;
        }
    </style>
    <section class="services-section-four style-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <span class="icon flaticon-telephone"></span>
                <h2>
                    Jobs Available In
                    <span>
                        {{ $country->country ?? '' }}
                    </span>
                </h2>
                <div class="text">
                    We are one of the best oversea employment agency in myanmar.
                </div>
            </div>

            <style>
                /* .service-block-three .inner-box .lower-content:before {
                    width: 100%;
                } */
            </style>
            <div class="row clearfix">
                @foreach ($jobs as $job)
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ $job->photo }}" alt=""
                                        style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                </a>
                            </div>
                            <div class="lower-content" style="width: 90%;">
                                <div class="content">
                                    <span class="icon flaticon-home-1"></span>
                                    <h5>
                                        <a href="javascript::void(0)">
                                            {{ $job->title ?? '' }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
