<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>FORERUNNER MYANMAR CO.,LTD - @yield('title')</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">
    <link id="theme-color-file" href="{{ asset('assets/css/color-themes/default-color.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        @include('layouts.menu')

        @if (URL::current() == route('home'))
            @include('layouts.slider')
        @endif

        @yield('content')

        @include('layouts.footer')

    </div>
    <!-- End PageWrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
        <button class="close-search"><span class="flaticon-up-arrow"></span></button>
        <form method="post" action="https://html.themerange.net/bricks/blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-gear"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Layout</h6>
        </div>

        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active"
                    data-theme-file="{{ asset('assets/css/color-themes/default-color.css') }}"></span>
                <span class="palate green-color"
                    data-theme-file="{{ asset('assets/css/color-themes/green-color.css') }}"></span>
                <span class="palate olive-color"
                    data-theme-file="{{ asset('assets/css/color-themes/blue-color.css') }}"></span>
                <span class="palate orange-color"
                    data-theme-file="{{ asset('assets/css/color-themes/orange-color.css') }}"></span>
                <span class="palate purple-color"
                    data-theme-file="{{ asset('assets/css/color-themes/purple-color.css') }}"></span>
                <span class="palate teal-color"
                    data-theme-file="{{ asset('assets/css/color-themes/teal-color.css') }}"></span>
                <span class="palate brown-color"
                    data-theme-file="{{ asset('assets/css/color-themes/brown-color.css') }}"></span>
                <span class="palate yellow-color"
                    data-theme-file="{{ asset('assets/css/color-themes/yellow-color.css') }}"></span>
            </div>
        </div>

        <h6>RTL Version</h6>
        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>
        <h6>Boxed Version</h6>
        <ul class="box-version option-box">
            <li class="box">Boxed</li>
            <li>Full width</li>
        </ul>
        <h6>Want Sticky Header</h6>
        <ul class="header-version option-box">
            <li class="box">No</li>
            <li>Yes</li>
        </ul>

    </div>

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validate.js') }}"></script>
    <script src="{{ asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/color-settings.js') }}"></script>

    <script>
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
            var src = $(this).attr('src');
            var modal;

            function removeModal() {
                modal.remove();
                $('body').off('keyup.modal-close');
            }
            modal = $('<div>').css({
                background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            }).click(function() {
                removeModal();
            }).appendTo('body');
            //handling ESC
            $('body').on('keyup.modal-close', function(e) {
                if (e.key === 'Escape') {
                    removeModal();
                }
            });
        });
    </script>
</body>

</html>
