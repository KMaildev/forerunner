@extends('layouts.main')
@section('content')
    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/cv.jpeg') }})">
            <div class="auto-container">
                <h1>Employer Form</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>Employer Form</li>
        </ul>
    </section>

    <section class="company-section">
        <div class="circle-layer"></div>
        <div class="big-letter">
            <img src="{{ asset('assets/images/resource/letter.png') }}" alt="" />
        </div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">
                            We are one of the best oversea employment agency in myanmar.
                        </div>
                        <br>
                        <h4>
                            FORERUNNER MYANMAR
                            <br>
                            COMPANY LIMITED.
                        </h4>
                        <div class="text">
                            <ul>
                                <li>
                                    <b>Global Network:</b> Emphasize your extensive network of connections with employers
                                    and
                                    businesses worldwide, providing a wide range of job opportunities in various industries
                                    and
                                    locations.
                                </li>
                                <br>
                                <li>
                                    <b>Market Knowledge:</b> Stay up-to-date with the latest trends and developments in the
                                    global
                                    job
                                    market, providing valuable insights to clients and candidates.
                                </li>
                            </ul>
                        </div>

                        <div class="fact-counter style-three">
                            <div class="row clearfix">
                                <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon flaticon-helmet"></div>
                                            <div class="count-outer count-box alternate">
                                                <span class="count-text" data-speed="5000" data-stop="10">0</span>+
                                            </div>
                                            <h4 class="counter-title">
                                                Our Experiences
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="button-box">
                            <a class="btn-style-three theme-btn" href="{{ route('about.index') }}">
                                <span class="txt">
                                    More About Us
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="title-box">
                                <h3>Application Form</h3>
                                <div class="text">
                                    Please complete the form to apply for a position with us.
                                </div>
                            </div>

                            <div class="default-form">
                                <form autocomplete="off" method="POST" action="{{ route('employer.store') }}"
                                    id="create-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
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

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
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

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Company Email
                                                    Address</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Company Email Address" name="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
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

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Company
                                                    Website</label>
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

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Company
                                                    Location</label>
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

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
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

                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Age Limit:
                                                    20-40</label>
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


                                        <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Educational
                                                    Requirement
                                                </label>

                                                <input type="text" class="form-control"
                                                    name="educational_requirement">

                                                @error('educational_requirement')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">
                                                    Working Experience
                                                </label>

                                                <input type="text" class="form-control"
                                                    name="working_experience_requirement">

                                                @error('working_experience_requirement')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Other Additional
                                                    Requirement</label>

                                                <input type="text" class="form-control"
                                                    name="other_additional_requirement">

                                                @error('other_additional_requirement')
                                                    <div class="help-block with-errors text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
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


                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Other
                                                    Allowance</label>
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


                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Gender: Male = 10,
                                                    Female
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


                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="nameInput" class="form-label text-white">Interview
                                                    Type</label>
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

                                        <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 py-3" style="padding-top: 7px;">
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
