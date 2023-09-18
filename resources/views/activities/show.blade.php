@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="page-title">
        <div class="content" style="background-image: url({{ asset('data/gallery_banner.jpg') }})">
            <div class="auto-container">
                <h1>Gallery & Activities</h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li><a href="route('home')">home</a></li>
            <li>Gallery & Activities</li>
            <li>
                {{ $category->title ?? '' }}
            </li>
        </ul>
    </section>

    <section class="news-section">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="width: 100%; height: 350px; background-size: top; object-fit: cover;">
                                    <div class="post-date">
                                        Gallery
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li>
                                            <span class="icon fa fa-user"></span>
                                            FORERUNNER MYANMAR CO.,LTD
                                        </li>
                                        <li>
                                            <span class="icon fa fa-comment"></span>
                                            Overseas Employment Agency
                                        </li>
                                    </ul>
                                    <h4>
                                        {{ $activity->title ?? '' }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
