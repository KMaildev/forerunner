<header class="main-header">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left clearfix">
                    <ul class="page-links">
                        <li>
                            <a href="javascript::void(0)">
                                Room (803), Building (C), Yadanar Housing, Yadana Road, (13) Block, <br> South Okkalarpa
                                Township, Yangon, Myanmar.
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="top-right pull-right clearfix">
                    <ul class="social-box">
                        <li class="follow">Follow us:</li>
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="" title="FORERUNNER MYANMAR CO.,LTD"
                                style="width: 300px;">
                        </a>
                    </div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <div class="upper-column info-box">
                        <div class="icon-box">
                            <span class="flaticon-email"></span>
                        </div>
                        <ul>
                            <li>
                                Email Us At:
                                <br>
                                <a href="mailto:info@forerunnermyanmar.com">
                                    info@forerunnermyanmar.com
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="upper-column info-box">
                        <div class="icon-box">
                            <span class="flaticon-telephone"></span>
                        </div>
                        <ul>
                            <li>
                                Call Us Any Time:<br>
                                <a href="tel:+959 421 008 271">
                                    +959 421 008 271
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="upper-column info-box">
                        <a href="javascript::void(0)" class="theme-btn btn-style-two">
                            <span class="txt">
                                Google Map
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-lower">
        <div class="auto-container clearfix">
            <div class="nav-outer clearfix">
                <div class="curve-layer"></div>
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">

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
                                    Our Network
                                </a>
                                <ul class="mega-submenu">
                                    @foreach ($countries as $country)
                                        <li>
                                            <a href="{{ route('job.show', $country->id) }}">
                                                {{ $country->country ?? '' }}
                                            </a>
                                        </li> @endforeach
                                </ul>
                            </li>


                            <li class="dropdown
                                    current">
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

                            <li class="current">
                                <a href="{{ route('contact.index') }}" class="mega-menu-link">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    </nav>

                    <div class="outer-box clearfix">
                        <div class="nav-btn navSidebar-button">
                            <span class="icon flaticon-menu-2"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ route('home') }}" title="">
                        <img src="{{ asset('data/logo.jpg') }}" alt="" title="" style="width: 200px;">
                    </a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <nav class="main-menu">
                    </nav>

                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/logo.jpg') }}" alt="" title="">
                    </a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>

</header>

<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="contact-info">
                            <h4>Contact Info</h4>
                            <ul class="list-style-one">
                                <li>
                                    <span class="icon fa fa-location-arrow"></span>

                                    Room (803), Building (C), Yadanar Housing, Yadana Road, (13) Block, South Okkalarpa
                                    Township, Yangon, Myanmar.
                                </li>
                                <li>
                                    <span class="icon fa fa-phone"></span>
                                    +959 421 008 271
                                </li>
                                <li>
                                    <span class="icon fa fa-envelope"></span>
                                    info@forerunnermyanmar.com
                                </li>
                                <li>
                                    <span class="icon fa fa-clock-o"></span>
                                    Week Days: 09.00 to 5.00
                                    Sunday: Closed
                                </li>
                            </ul>
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
        </div>
    </div>
</div>
