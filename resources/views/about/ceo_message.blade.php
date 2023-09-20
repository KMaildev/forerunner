@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')

    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/about-us-banner.jpg') }})">
            <div class="auto-container">
                <h1>CEO’s MESSAGE</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>CEO’s MESSAGE</li>
        </ul>
    </section>


    <section class="team-single-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image" >
                            <img style="border: 2px solid #ff0000; padding: 10px;" src="https://cdn-icons-png.flaticon.com/512/6813/6813405.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>
                            Tin Tin Win
                            <span class="category">CEO</span>
                        </h3>
                        <ul class="post-meta">
                            <li>
                                <span class="icon flaticon-email-2"></span>
                                <a href="mailto:info@forerunnermyanmar.com">
                                    info@forerunnermyanmar.com
                                </a>
                            </li>
                            <li>
                                <span class="icon flaticon-call-2"></span>
                                <a href="tel:+959 421 008 271">+959 421 008 271</a>
                            </li>
                            <li>
                                <span class="icon flaticon-call-1"></span>
                                <a href="tel:+959 5 085 559">
                                    +959 5 085 559
                                </a>
                            </li>
                        </ul>
                        <div class="text">
                            <p>
                                <br>
                                Dear Team at Forerunner Myanmar Co., Ltd.,
                                <br><br>
                                I hope this message finds you all in high spirits. I'd like to take a moment to share some
                                thoughts and express my gratitude for your dedication to our mission in the overseas
                                employment sector.
                                <br><br>
                                At Forerunner Myanmar Co., Ltd., our goal has always been clear: to empower individuals
                                through global career opportunities. Over the years, we've achieved significant milestones
                                and transformed countless lives.
                                <br><br>
                                I want to commend each of you for your hard work, commitment, and ethical practices. We've
                                overcome challenges, adapted to industry changes, and consistently prioritized the welfare
                                of our clients and candidates.
                                <br><br>
                                In today's interconnected world, our role is more crucial than ever. We link individuals
                                with their dreams, connecting them with opportunities that align with their goals. We enable
                                them to explore new horizons, embrace diverse cultures, and contribute to a global
                                community.
                                <br><br>
                                As we look ahead, let's reiterate our commitment to excellence and innovation. We'll use
                                emerging technologies to enhance our processes and deliver better results for everyone
                                involved.
                                <br><br>
                                I'm excited about the future, and I'm confident that, with your support, we'll continue to
                                break barriers and create opportunities for individuals seeking overseas employment.
                                <br><br>
                                Thank you for being an essential part of our journey.
                                <br><br>
                                Warm regards,
                                <br>
                                Tin Tin Win
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
