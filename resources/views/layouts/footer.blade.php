<footer class="footer-style-two style-two" style="background-image:url({{ asset('assets/images/background/10.jpg') }})">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('data/logo.jpg') }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="text">
                                        FORERUNNER MYANMAR CO.,LTD
                                        <br><br>
                                        <p>
                                            We are one of the best oversea employment agency in myanmar.
                                        </p>
                                    </div>
                                    <ul class="social-box">
                                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                                        <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Quick Links</h5>
                                <ul class="list-link">
                                    <li class="current">
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>

                                    <li class="dropdown current">
                                        <a href="#" class="mega-menu-link">
                                            About Us
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    Our Company
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('ceo_message') }}">
                                                    CEO’s MESSAGE
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team') }}">
                                                    Professional Team
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" target="_blank">
                                                    Company Profile
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown current">
                                        <a href="#" class="mega-menu-link">
                                            Application Form
                                        </a>
                                        <ul class="mega-submenu">
                                            <li>
                                                <a href="{{ route('cv.index') }}">
                                                    Submit CV
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('employer.index') }}">
                                                    Employer Form
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h5>
                                    Overseas Jobs
                                </h5>
                                <ul class="list-link">


                                    <li class="dropdown current">
                                        <a href="#" class="mega-menu-link">
                                            Our Network
                                        </a>
                                        <ul class="mega-submenu">
                                            @foreach ($countries as $country)
                                                <li>
                                                    <a href="{{ route('job.show', $country->id) }}">
                                                        {{ $country->country ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="dropdown current">
                                        <a href="#" class="mega-menu-link">
                                            Gallery & Activities
                                        </a>
                                        <ul class="mega-submenu">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="{{ route('activities.show', $category->id) }}">
                                                        {{ $category->title ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h5>
                                    Facebook
                                </h5>
                                <div class="row clearfix">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-gallery">
            <div class="footer-gallery-carousel owl-carousel owl-theme">
                @foreach ($activities_footer as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="slide" title="Click on Image">
                            <a href="{{ $image }}" data-fancybox="gallery" data-caption="">
                                <img src="{{ $image }}" alt=""
                                    style="width: 100%; height: 180px; object-position: top; background-size: center; object-fit: cover;" />
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

    </div>
    <div class="footer-bottom" style="padding-top: 100px;">
        <div class="auto-container">
            <div class="copyright">
                &copy;
                Copyright ©
                {{ now()->year }}
                FORERUNNER MYANMAR CO.,LTD. All Rights Reserved
            </div>
        </div>
    </div>
</footer>
