@extends('layouts.main')
@section('content')
    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/cv.jpeg') }})">
            <div class="auto-container">
                <h1>Submit CV</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>Submit CV</li>
        </ul>
    </section>


    <section class="contact-page-section style-two">
        <div class="image-layer" style="background-image:url({{ asset('data/cv_bg.jpg') }})"></div>
        <div class="auto-container">
            <!-- Title Box -->
            <div class="title-box">
                <h2>Have Some Questions?</h2>
                <div class="text">Thankyou for your intrest in our services. Please filllout the form bellow or or email
                    us at <br> given id and we will get back to you promptly regarding your request.</div>
            </div>

            <!-- Lower Section -->
            <div class="lower-section">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2> Apply for your job!</h2>
                            <div class="text" style="font-size: 20px;">
                                When it comes to choosing an employment agency, there are several factors to consider.
                                Here are some reasons why you may choose us:
                            </div>

                            <ul class="list-style-two">
                                <li style="font-size: 16px;">
                                    Expertise and Experience: We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </li>
                                <li style="font-size: 16px;">
                                    Time and Cost Savings: Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <h3>
                                    Job Application
                                </h3>
                                <div class="text">
                                    Please complete the form to apply for a position with us.
                                </div>
                            </div>
                            <div class="default-form contact-form">
                                <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                                    enctype="multipart/form-data" id="create-form" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label style="color: white">Name*</label>
                                                <input type="text" name="name" class="form-control " value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label style="color: white">Phone</label>
                                                <input type="text" name="phone" class="form-control " value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label style="color: white">Additional Note</label>
                                                <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="img" style="color: white">
                                                    Select your CV to
                                                    upload
                                                </label>
                                                <br>
                                                <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                                    class="form-control-file" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="theme-btn btn-style-four">
                                                <span class="txt">
                                                    Submit Now
                                                </span>
                                            </button>
                                        </div>
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
