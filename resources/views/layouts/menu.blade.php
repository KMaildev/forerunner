<header class="main-header">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <ul class="page-links">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Term Of Service</a></li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <!-- Social Box -->
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
                            <img src="{{ asset('assets/images/logo.png') }}" alt=""
                                title="FORERUNNER MYANMAR CO.,LTD">
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
                                <a href="mailto:email@domain.com">
                                    email@domain.com
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
                                <a href="tel:+0-000-0000-000">
                                    +0 (000) 0000 000
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="upper-column info-box">
                        <div class="icon-box">
                            <span class="flaticon-map"></span>
                        </div>
                        <ul>
                            <li>
                                Location<br>
                                <a href="#">04 East, New York, USA</a>
                            </li>
                        </ul>
                    </div>

                    <div class="upper-column info-box">
                        <a href="#" class="theme-btn btn-style-two">
                            <span class="txt">
                                Get A Quote
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
                                        <a href="{{ asset('data/painghtetsan.pdf') }}" target="_blank">
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
                                        </li>
                                    @endforeach
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

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="{{ asset('assets/images/logo-small.png') }}"
                        alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo-small.png') }}"
                        alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

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

                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/images/logo-2.png') }}"
                                    alt="" /></a>
                        </div>
                        <div class="content-box">
                            <h4>About Us</h4>
                            <p class="text">The argument in favor of using filler text goes something like
                                this: If you use Consulting Process, anytime you reach a review point you’ll end
                                up reviewing and negotiating the content itself and not the design.</p>
                            <a href="contact.html" class="theme-btn btn-style-one"><span
                                    class="txt">Consultation</span></a>
                        </div>
                        <div class="contact-info">
                            <h4>Contact Info</h4>
                            <ul class="list-style-one">
                                <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City,
                                    USA</li>
                                <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                <li><span class="icon fa fa-envelope"></span>bricks@gmail.com</li>
                                <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday:
                                    Closed</li>
                            </ul>
                        </div>
                        <!-- Social Box -->
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
