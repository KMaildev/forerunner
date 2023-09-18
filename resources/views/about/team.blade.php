@extends('layouts.main')
@section('title', 'Team')
@section('content')
    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/team_banner.webp') }})">
            <div class="auto-container">
                <h1>Meet Professional Team</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    home
                </a>
            </li>
            <li>Our Company <span>Members</span></li>
        </ul>
    </section>


    <section class="team-section-two style-two">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <span class="icon flaticon-telephone"></span>
                <h2>Our Company <span>Members</span></h2>
                <div class="text">
                    FORERUNNER MYANMAR CO.,LTD
                </div>
            </div>

            <div class="row clearfix">
                @foreach ($teams as $team)
                    <div class="team-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="width: 100%; height: auto; background-size: top; object-fit: cover;">
                                </a>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                    <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                    <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h5>
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h5>
                                <div class="designation">
                                    {{ $team->position ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
