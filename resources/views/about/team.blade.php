@extends('layouts.main')
@section('title', 'Team')
@section('content')
    <div class="cmt-page-title-row bg-base-dark cmt-bg cmt-bgimage-yes clearfix">
        <div class="cmt-titlebar-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cmt-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Our Team</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                            </span>
                            <span>Meet Professional Team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-main">
        <section class="cmt-row padding_bottom_zero-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title style2">
                            <div class="title-header">
                                <h3>Meet Our Team</h3>
                                <h2 class="title">Our powerful team members</h2>
                            </div>
                            <div class="title-desc">
                                <p style="text-align: justify">
                                    "We are a skilled overseas employment agency, connecting talented individuals with
                                    international job opportunities. Our deep understanding of global markets, immigration
                                    laws, and visa processes enables us to offer a wide range of employment options in
                                    various sectors. Emphasizing transparency, ethical practices, and open communication, we
                                    provide personalized guidance and support to job seekers, ensuring successful placements
                                    and fostering long-term client relationships."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb_15">
                    @foreach ($teams as $team)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="border-radius: 30px 0 30px 0; width: 100%; height: auto; background-size: top; object-fit: cover;">
                                </div>
                                <div class="featured-content">
                                    <div class="team-position">
                                        {{ $team->position ?? '' }}
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="javascript::void(0)">{{ $team->name ?? '' }}</a></h3>
                                    </div>
                                    <div class="featured-view-more">
                                        <a class="cmt-btn btn-inline cmt-btn-size-md cmt-btn-color-skincolor"
                                            href="javascript::void(0)">{{ $team->position ?? '' }}</a>
                                    </div>
                                    <div class="featured-iconbox cmt-media-link">
                                        <div class="media-block">
                                            <div class="media-btn"><i class="icon-plus"></i></div>
                                            <ul class="social-icons list-inline">
                                                <li class="social-facebook">
                                                    <a href="#">
                                                        <i class="ti ti-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social-twitter">
                                                    <a href="#">
                                                        <i class="ti ti-twitter-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="social-pinterest">
                                                    <a href="#">
                                                        <i class="ti ti-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li class="social-instagram">
                                                    <a href="#">
                                                        <i class="ti ti-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <br>
@endsection
