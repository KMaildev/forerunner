@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')
    <div class="cmt-page-title-row bg-base-dark cmt-bg cmt-bgimage-yes clearfix">
        <div class="cmt-titlebar-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cmt-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">About Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                            </span>
                            <span>About of Our Company</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">
        <section class="cmt-row about-section clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="res-991-pb-15">
                            <div class="section-title">
                                <div class="title-header">
                                    <h3>About us</h3>
                                    <h2 class="title">
                                        PAING HTET SAN RECRUITMENT CO.,LTD.
                                    </h2>
                                </div>
                                <div class="title-desc">
                                    <p style="text-align: justify; color: black;">
                                        We believe that the right talent can transform organizations and elevate
                                        careers to new heights. Our journey began with a shared vision of bridging
                                        the gap between talented individuals and exceptional opportunities, and
                                        today, we stand proud as a leading recruitment agency, making meaningful
                                        connections that drive success.
                                        
                                        <br><br>
                                        
                                        Paing Htet San Company was founded in 2022, driven by a passion for
                                        empowering professionals and organizations to achieve their full potential.
                                        Our founders experienced the challenges of finding the perfect fit firsthand,
                                        and this ignited the idea of building a recruitment company that goes beyond
                                        matching skills, aiming to unite values and ambitions.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="featured-icon-box icon-align-before-content p-20 bg-base-grey border-rad_5">
                                        <div class="featured-icon">
                                            <div
                                                class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h2 class="fs-18 mb-0">
                                                    Licence No
                                                </h2>
                                                <h3 class="text-base-skin mb-0">
                                                    176/2023
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="featured-icon-box icon-align-before-content p-20 bg-base-grey border-rad_5">
                                        <div class="featured-icon">
                                            <div
                                                class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                                                <i class="flaticon flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h2 class="fs-18 mb-0">Phone</h2>
                                                <p class="mb-0">09-447486241</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="ttm_single_image-wrapper d-table border-rad_5 overflow-hidden">
                            <img width="1140" height="1200" class="img-fluid" src="{{ asset('data/about.png') }}"
                                alt="single-04">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="cmt-row bg-base-dark cmt-bg cmt-bgimage-yes bg-img1 clearfix">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer bg-base-dark"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title style2 mb-0 res-991-mb_20">
                        <div class="title-header">
                            <h3>Company Information</h3>
                            <h2 class="title">
                                LEGAL DOCUMENTS
                            </h2>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/3.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 490px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                        <center>
                            <h6>Certificate of Incorporation</h6>
                        </center>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 490px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                        <center>
                            <h6>Company Licence</h6>
                        </center>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 490px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                        <center>
                            <h6>Company Licence</h6>
                        </center>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/c1.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 490px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                        <center>
                            <h6>Certificate of Incorporation</h6>
                        </center>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 14px;">
                    <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                        <img src="{{ asset('data/c2.png') }}" alt="" data-enlargeable=""
                            style="object-position: top; width: 100%; height: 490px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                            class="img-enlargeable">
                        <center>
                            <h6>MOEAF Certificate</h6>
                        </center>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="cmt-row padding_bottom_zero-section clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="row g-0">
                        <div class="col-lg-7 col-md-12">
                            <div
                                class="cmt-bg cmt-col-bgcolor-yes bg-base-dark cmt-bg cmt-left-span spacing-2 res-1199-pl-15">
                                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer bg-base-dark"
                                    style="background-color: white;">
                                    <div class="cmt-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h3>
                                                Our Company Statement
                                            </h3>
                                            <h2 class="title" style="color: black">
                                                Our Vision, Mission & Values
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="pt-5">
                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style3 pb-5">
                                            <div class="featured-icon">
                                                <div
                                                    class="cmt-icon cmt-icon_element-fill cmt-icon_element-style-rounded cmt-icon_element-color-skincolor cmt-icon_element-size-xs">
                                                    <i class="number"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3 style="color: black;">Our Vision</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p style="color: black;">
                                                        To be a leading overseas employment agency, connecting global
                                                        talent with exceptional opportunities abroad, and making a positive
                                                        impact on individuals and societies worldwide.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style3 mb-0">
                                            <div class="featured-icon">
                                                <div
                                                    class="cmt-icon cmt-icon_element-fill cmt-icon_element-style-rounded  cmt-icon_element-color-skincolor cmt-icon_element-size-xs">
                                                    <i class="number"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3 style="color: black;">
                                                        Our Mission
                                                    </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p style="color: black;">
                                                        Providing reliable overseas employment services and fostering
                                                        cultural exchange for international placement.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style3 mb-0">
                                            <div class="featured-icon">
                                                <div
                                                    class="cmt-icon cmt-icon_element-fill cmt-icon_element-style-rounded  cmt-icon_element-color-skincolor cmt-icon_element-size-xs">
                                                    <i class="number"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3 style="color: black;">
                                                        Our Value
                                                    </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p style="color: black;">
                                                        <span stle="font-weight: bold">
                                                            COLLABORATION
                                                        </span>
                                                        <br>
                                                        We believe in building lasting
                                                        partnerships with both candidates and
                                                        clients, fostering a collaborative and
                                                        supportive environment.
                                                        <br><br>
                                                        
                                                        
                                                        <span stle="font-weight: bold">
                                                            EMPOWERMENT
                                                        </span>
                                                        <br>
                                                        We empower individuals to achieve
                                                        their career aspirations and support
                                                        organizations in realizing their full
                                                        potential through talent acquisition.
                                                        <br><br>
                                                        
                                                        
                                                        
                                                        <span stle="font-weight: bold">
                                                            INTEGRITY
                                                        </span>
                                                        <br>
                                                        We uphold the highest ethical
                                                        standards in all our interactions,
                                                        fostering trust and transparency with
                                                        candidates and clients alike.
                                                        <br><br>
                                                        
                                                        
                                                        <span stle="font-weight: bold">
                                                            EXCELLENCE
                                                        </span>
                                                        <br>
                                                        Our team's industry expertise and
                                                        knowledge allow us to understand
                                                        specific requirements and identify the
                                                        best-fit talent for each role.
                                                        <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div
                                class="cmt-bg cmt-col-bgimage-yes col-bg-img-one cmt-right-span z-index-2 mr_200 res-991-mr-0">
                                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer" style="background-image: url(https://i2k4p7s9.stackpathcdn.com/wp-content/uploads/2016/01/mission-vision-values.png);"></div>
                                <div class="layer-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-12">
                    <center>
                        <img src="{{ asset('data/org.png') }}" />
                    </center>
                </div>
            </div>
        </div>
    </section>
@endsection
