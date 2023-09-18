@extends('layouts.main')
@section('title', 'Jobs')
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
                                    Countries We Serve
                                </h3>
                                <h2 class="title">
                                    Our Services
                                </h2>
                            </div>
                            <div class="title-desc">
                                <p style="text-align: justify;">
                                    PAING HTET SAN RECRUITMENT CO.,LTD. is a leading international employment agency
                                    specializing in connecting
                                    employers from all over the world with the best and most qualified candidates. With a
                                    wide network of recruitment professionals, our team is dedicated to matching employers
                                    with the ideal candidates to help your business succeed.
                                </p>
                            </div>
                        </div>
                        <div class="pb-60 res-991-p-0"></div>
                    </div>
                </div>
            </div>
        </section>



        <section class="cmt-row conatct-section bg-img6 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="sec-title text-center">
                            <span class="sub-title">
                                We also have job offers in other countries.
                            </span>
                            <h2>We have international career
                                <br>
                                <span class="color3">opportunities all across Asia.</span>
                            </h2>
                            <p style="text-align: justify">
                                Welcome to PAING HTET SAN RECRUITMENT CO.,LTD., one of the leading overseas employment
                                agencies! With our years
                                of experience in the industry, we offer a host of services to help people find the right job
                                category for them around the world. Make sure to take advantage of our services and get the
                                career that best suits you!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="grid-section clearfix">
            <div class="container">
                <div class="row">
                    <h2 style="font-size: 20px;">
                        Jobs Available In
                        <span class="color3">
                            {{ $country->country ?? '' }}
                        </span>
                    </h2>
                    @foreach ($jobs as $job)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="{{ route('cv.index') }}">
                                <div class="featured-imagebox featured-imagebox-post style3">
                                    <div class="featured-thumbnail">
                                        <img src="{{ $job->photo }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                        <div class="post-category">
                                            <a href="javascript::void(0)">
                                                {{ $job->country->country ?? '' }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="featured-content"
                                        style="padding: 10px 10px 10px; background-color: #51a7cc;">
                                        <div class="featured-content-inner">
                                            <div class="post-header">
                                                <center>
                                                    <a href="javascript::void(0)" style="color: white;">
                                                        {{ $job->title ?? '' }}
                                                    </a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
