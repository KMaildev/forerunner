@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/contact-us-banner.jpg') }})">
            <div class="auto-container">
                <h1>Contact Us</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>Contact Us</li>
        </ul>
    </section>


    <section class="contact-page-section style-two">
        <div class="image-layer" style="background-image:url({{ asset('data/wmap.avif') }})"></div>
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>Have Some Questions?</h2>
                <div class="text">
                    Thank You for your interest in our services. Please fill out the form below or or email us
                    <br>
                    at given information and we will get back to you promptly regarding your request.
                </div>
            </div>
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <span class="icon flaticon-maps-and-flags"></span>
                        <div class="text">
                            Room (803), Building (C),
                            Yadanar Housing, Yadana Road, (13) Block,
                            South Okkalarpa Township, Yangon, Myanmar.
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <span class="icon flaticon-email-3"></span>
                        <div class="text">
                            <a href="mailto:info@forerunnermyanmar.com">
                                info@forerunnermyanmar.com
                            </a>
                            <br>
                            <a href="mailto:forerunnermyanmar.mm@gmail.com">
                                forerunnermyanmar.mm@gmail.com
                            </a>
                            <br><br>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <span class="icon flaticon-telephone"></span>
                        <div class="text">
                            <a href="tel:09 421008271">
                                +959 421 008 271
                            </a>
                            <br>
                            <a href="tel: 09 5085559">
                                +959 5 085 559
                            </a>
                            <br>
                            <a href="tel:+959 264 740 077">
                                +959 264 740 077
                            </a>
                            <br>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Lower Section -->
            <div class="lower-section">
                <div class="row clearfix">

                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Interested in discussing?</h2>
                            <div class="text">
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
                            </div>
                            <div class="button-box">
                                <a class="btn-style-two theme-btn" href="tel:+959 264 740 077">
                                    <span class="txt">
                                        Call Now
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <h3>Need Some Advice?</h3>
                                <div class="text">
                                    Contact Us To Learn More.
                                </div>
                            </div>
                            <div class="default-form contact-form">
                                <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                                    autocomplete="off">
                                    @csrf

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="name" type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="email" type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="phone" type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="theme-btn btn-style-four">
                                            <span class="txt">
                                                contact us now
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
