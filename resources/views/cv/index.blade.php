@extends('layouts.main')
@section('content')
    <div class="cmt-page-title-row bg-base-dark cmt-bg cmt-bgimage-yes clearfix">
        <div class="cmt-titlebar-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cmt-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">
                                Submit CV
                            </h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                            </span>
                            <span>
                                Submit CV
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-main">
        <section class="cmt-row about-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-12">
                        <div class="inner-column" style="padding-right: 0px">
                            <div class="sec-title">
                                <span class="sub-title">
                                    Apply for your job!
                                </span>
                                <h2>Submit <span class="color3">CV</span></h2>
                                <div class="text">
                                    When it comes to choosing an employment agency, there are several factors to consider.
                                    Here are some reasons why you may choose us:
                                </div>
                            </div>

                            <ul class="list-style-two">
                                <li>
                                    Expertise and Experience: We have a team of experienced professionals who specialize in
                                    recruitment and talent acquisition. Our expertise allows us to understand the
                                    intricacies of various industries and job markets, enabling us to find the best
                                    candidates for your organization.
                                </li>
                                <li>
                                    Time and Cost Savings: Recruiting and hiring can be time-consuming and expensive. As an
                                    employment agency, we handle the entire process for you, from sourcing candidates to
                                    conducting initial screenings and interviews. This saves you valuable time and resources
                                    that can be better utilized for other core business activities.
                                </li>
                                <li>
                                    Ongoing Support: Our relationship with you does not end once a candidate is hired. We
                                    provide ongoing support to ensure a smooth transition and integration for the new
                                    employee. Additionally, we offer post-placement follow-ups to address any concerns or
                                    issues that may arise.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6" style="background-color: #3c98c0; padding: 20px;">
                        <h2>Job <span class="color3">Application</span></h2>
                        <p style="color: white">
                            Please complete the form to apply for a position with us.
                        </p>
                        <div class="res-1199-pt-40">
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

                                    <div class="col-lg-12 py-3">
                                        <div class="form-group">
                                            <label style="color: white">Additional Note</label>
                                            <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 py-3">
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

                                    <div class="col-md-12 py-3">
                                        <button
                                            class="submit cmt-btn btn-default cmt-icon-btn-left cmt-btn-size-md cmt-btn-color-dark mt-5"
                                            type="submit">
                                            <i class="icon-right"></i>
                                            <span>Submit Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
