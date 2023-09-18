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
                            <h2 class="title">
                                CEO’s MESSAGE
                            </h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                            </span>
                            <span>
                                CEO’s MESSAGE
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="section-full p-t120 p-b120 twm-explore-area bg-cover ">
        <div class="container">
            <div class="section-content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="team-block">
                                <div class="team-thumb">
                                    <img class="img-fullwidth" src="{{ asset('data/md.png') }}" alt=""
                                        style="width: 100%;">
                                </div>

                                <div class="info">
                                    <center>
                                        <div class="pt-10 pb-10" style="background-color: #d96f2d">
                                            <h4 class="mt-0 mb-0 text-white" style="font-size: 17px;">
                                                KYAW MIN OO
                                            </h4>
                                            <h6 class="mt-0 mb-0 text-white" style="font-size: 15px;">
                                                Managing Director
                                            </h6>
                                        </div>
                                    </center>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <div class="twm-title-small">
                                PAING HTET SAN
RECRUITMENT CO.,LTD.
                            </div>
                            <h2>
                                CEO’s MESSAGE
                            </h2>
                            <p style="text-align: justify; font-size: 18px; color: black;">
                                Dear Job Seekers,
                                <br><br>
                                Welcome to our overseas employment agency!
                                <br><br>
                                At our agency, our mission is clear to connect talented individuals
                                like you with international job opportunities. With our deep understanding of
                                global markets, immigration laws, and visa processes, we can offer a wide
                                range of employment options in various sectors.
                                <br><br>
                                Transparency, ethics and open communication are at the heart of
                                our values. We are dedicated to providing personalized guidance and support
                                to each one of you. Our commitment to excellence ensures successful
                                placements and long-term relationships with our clients.
                                <br><br>
                                Let’s work together to make your dreams of working abroad a
reality.
                                <br><br>
                                Best Regards!
                                <br>
                                Mr. Kyaw Min Oo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
