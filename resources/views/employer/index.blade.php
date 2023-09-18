@extends('layouts.main')
@section('content')
    <div class="site-main">
        <section class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix">
            <div class="cmt-row-wrapper-bg-layer cmt-bg-layer bg-base-dark"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title style2 res-991-mb_20">
                            <div class="title-header">
                                <h3>
                                    Your dream candidate is just around the corner.
                                </h3>
                                <h2 class="title">
                                    Post a job <br> and hire talent worker
                                </h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    We are one of the best oversea employment agency in myanmar.
                                </p>
                            </div>
                        </div>
                        <div class="pb-60 res-991-p-0"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cmt-row padding_zero-section clearfix">
            <div class="container">
                <div class="row mt_140 res-991-mt-40">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/aIQvj-l5W2s"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/arNcqmgXPqc"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="featured-imagebox featured-imagebox-services style1">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zo1e7XUWkME"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-25 text-center text-base-dark">
                            Let us find a candidate who can start right away and handle any job
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="cmt-row about-section clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-12">
                        <div class="inner-column" style="padding-right: 0px">
                            <div class="sec-title">
                                <span class="sub-title">
                                    Apply for your company!
                                </span>
                                <h2>Application <span class="color3">Form</span></h2>
                                <div class="text">
                                    When it comes to choosing an overseas employment agency, there are several factors that
                                    potential clients consider. Here are some reasons why someone might choose your agency:
                                </div>
                            </div>

                            <ul class="list-style-two">
                                <li>
                                    <b>Experience and Expertise:</b> Highlight your agency's track record in successfully placing
                                    candidates in overseas positions. Showcase your expertise in navigating complex
                                    international employment regulations and procedures.
                                </li>

                                <li>
                                    <b>Global Network:</b> Emphasize your extensive network of connections with employers and
                                    businesses worldwide, providing a wide range of job opportunities in various industries
                                    and
                                    locations.
                                </li>

                                <li>
                                    <b>Comprehensive Services:</b> Offer a full suite of services, including pre-screening
                                    candidates,
                                    visa assistance, travel arrangements, and ongoing support for both the employee and
                                    employer.
                                </li>

                                <li>
                                    <b>Cultural Understanding:</b> Demonstrate cultural awareness and sensitivity, which is crucial
                                    for
                                    ensuring successful placements and smooth transitions for candidates working in
                                    different
                                    countries.
                                </li>

                                <li>
                                    <b>Legal Compliance:</b> Ensure that your agency complies with all relevant laws and
                                    regulations
                                    related to international recruitment and employment, giving clients peace of mind.
                                </li>

                                <li>
                                    <b>Personalized Approach:</b> Provide personalized attention to both employers and job seekers,
                                    understanding their unique needs and tailoring your services accordingly.
                                </li>

                                <li>
                                    <b>Transparent Communication:</b> Maintain clear and open communication throughout the
                                    recruitment
                                    process, keeping both employers and candidates informed at every stage.
                                </li>

                                <li>
                                    <b>Success Stories/Testimonials:</b> Share success stories and testimonials from satisfied
                                    clients
                                    and candidates, illustrating the positive outcomes of working with your agency.
                                </li>

                                <li>
                                    <b>Industry Specialization:</b> If your agency focuses on specific industries or job sectors,
                                    highlight your expertise in those areas to attract clients looking for specialized
                                    talent.
                                </li>

                                <li>
                                    <b>Continuous Support:</b> Offer ongoing support to candidates even after they have been
                                    placed,
                                    ensuring their well-being and job satisfaction throughout their employment abroad.
                                </li>

                                <li>
                                    <b>Ethical Practices:</b> Demonstrate a commitment to ethical recruitment practices, including
                                    fair
                                    treatment of candidates, transparent fee structures, and zero tolerance for any form of
                                    exploitation.
                                </li>

                                <li>
                                    <b>Market Knowledge:</b> Stay up-to-date with the latest trends and developments in the global
                                    job
                                    market, providing valuable insights to clients and candidates.
                                </li>

                                <br>
                                Remember that trust and reputation are essential in the employment agency industry.
                                Providing excellent service, delivering on promises, and building long-term relationships
                                with clients and candidates will contribute to the success of your agency.
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6" style="background-color: #3c98c0; padding: 20px;">
                        <h2>Application  <span class="color3">Form</span></h2>
                        <p style="color: white">
                            Please complete the form to apply for a position with us.
                        </p>
                        <div class="res-1199-pt-40">
                            <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Name</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('company_name') is-invalid @enderror"
                                                placeholder="Company Name" name="company_name"
                                                value="{{ old('company_name') }}">
                                            @error('company_name')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Type of Company</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('company_type') is-invalid @enderror"
                                                placeholder="Type Of Company" name="company_type"
                                                value="{{ old('company_type') }}">
                                            @error('company_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Email
                                                Address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Company Email Address" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Phone
                                                Number</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Company Phone Number" name="phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Website</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('website') is-invalid @enderror"
                                                placeholder="Company Website" name="website"
                                                value="{{ old('website') }}">
                                            @error('website')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Company Location</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="Company Location" name="location"
                                                value="{{ old('location') }}">
                                            @error('location')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Job Category</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('job_category') is-invalid @enderror"
                                                placeholder="Job Category" name="job_category"
                                                value="{{ old('job_category') }}">
                                            @error('job_category')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Age Limit: 20-40</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('age_limit') is-invalid @enderror"
                                                placeholder="Age Limit: 20-40" name="age_limit"
                                                value="{{ old('age_limit') }}">
                                            @error('age_limit')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Educational
                                                Requirement</label>
                                            <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                                placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                            @error('educational_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">
                                                Working Experience Requirement
                                            </label>
                                            <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                                name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                            @error('working_experience_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Other Additional
                                                Requirement</label>
                                            <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                                name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                            @error('other_additional_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Estimate Salary
                                                Offer</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                                placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                                value="{{ old('estimate_salary_offer') }}">
                                            @error('estimate_salary_offer')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Other Allowance</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('other_allowance') is-invalid @enderror"
                                                placeholder="Other Allowance" name="other_allowance"
                                                value="{{ old('other_allowance') }}">
                                            @error('other_allowance')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Gender: Male = 10, Female
                                                =
                                                5</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('gender') is-invalid @enderror"
                                                placeholder="Gender: Male = 10, Female = 5" name="gender"
                                                value="{{ old('gender') }}">
                                            @error('gender')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-white">Interview Type</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('interview_type') is-invalid @enderror"
                                                placeholder="Interview Type: Online" name="interview_type"
                                                value="{{ old('interview_type') }}">
                                            @error('interview_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 py-2">
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
