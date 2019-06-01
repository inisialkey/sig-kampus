<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Welcome to SIGKAMPUS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="YES" />
    <!-- //META FOR IOS & HANDHELD -->

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet'
        type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/font-lotusicon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/lib/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/helper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/responsive.css') }}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/style.css') }}">

</head>

<body>

    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">

            <!-- HEADER TOP -->
            @extends('frontend.headertop')
            <!-- END / HEADER TOP -->

            <!-- HEADER LOGO & MENU -->
            @extends('frontend.header')
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->

        <!-- BANNER SLIDER -->
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    {{-- FOREACH --}}

                    <li data-transition="fade">
                        <img src="#" data-bgposition="left center"
                            data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center"
                            data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center"
                            data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                            {{-- CAPTION --}}
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center"
                            data-y="280" data-speed="700" data-easing="easeOutBack" data-start="2000">
                            {{-- CAPTION --}}
                         </div>
                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                            data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">
                            {{-- CAPTION --}}
                        </div>
                    </li>


                    {{-- ENDFOREACH --}}


                </ul>
            </div>

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row v-align">
                        <div class="col-lg-3">
                            <h2>MAKE A RESERVATION</h2>
                        </div>
                        <div class="col-lg-9">
                            <div class="availability-form">
                                <div class="vailability-submit">
                                    <a href="#" class="awe-btn awe-btn-13">BOOK A ROOM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->


        <!-- ROOM DETAIL -->
        <section class="section-room-detail bg-white">
            <div class="container">

                <!-- COMPARE ACCOMMODATION -->
                <div class="room-detail_compare">
                    <div class="row">
                        <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                            <div class="ot-heading row-20 mb30 text-center">
                                <h2 class="shortcode-heading">Hotel Room</h2>
                            </div>
                        </div>
                    </div>

                    <div class="room-compare_content">

                        <div class="row">
                            <!-- ITEM -->


                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"
                                                src="#"
                                                alt="GAMBAR"></a>
                                    </div>

                                    <div class="text">
                                        <h2><a herf="#">type</a></h2>

                                        <ul>
                                            <h4>Format uang</h4>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <!-- END / ITEM -->



                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="awe-btn awe-btn-default font-hind f12 bold btn-medium mt15">View More</a>
                        </div>
                        <!-- END / COMPARE ACCOMMODATION -->
                    </div>
        </section>
        <!-- END / SHOP DETAIL -->


        <!-- DEALS PACKAGE -->
        <section class="section-deals mt90">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                            <h3 class="shortcode-heading"></h3>
                            <div class="ot-heading row-20 mb30 text-center">
                                <h2 class="shortcode-heading">Deals & PACKAGE</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="item item-deal">
                                    <div class="img">
                                        <img class="img-full" src="#"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <a class="title bold f26 font-monserat upper" href="!#">Meeting</a>
                                        <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                        <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold"
                                            href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="item item-deal">
                                    <div class="img">
                                        <img class="img-full" src="#"
                                            alt="GAMBAR">
                                    </div>
                                    <div class="info">
                                        <a class="title bold f26 font-monserat upper" href="!#">weeding</a>
                                        <p class="sub font-monserat f12 f-600 upper mt10 mb20">package</p>
                                        <a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold"
                                            href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <br><br><br><br><br><br><br>
        <!-- END / DEALS PACKAGE -->

        <!-- BLOG -->
        <section class="section-blog bg-white">
            <div class="container">
                <div class="blog">
                    <div class="row">

                        <div class="col-md-8 col-md-push-4">
                            <div class="blog-content events-content">

                                <div class="content">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                                            <div class="ot-heading row-20 mb40 text-center">
                                                <h2 class="shortcode-heading">Latest Blog</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="item">
                                                <div class="img">
                                                    <a href="#"><img
                                                            class="img-responsive img-full"
                                                            src="#"
                                                            alt="#"></a>
                                                </div>
                                                <div class="info"><br>
                                                    <a class="title font-monserat f14 mb20 block bold upper"
                                                        href="">MANTAP</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-center">
                                        <a href="#"
                                            class="awe-btn awe-btn-default font-hind f12 bold btn-medium mt15">View
                                            more</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-md-pull-8">
                            <div class="sidebar">

                                <!-- UPCOMING EVENTS -->
                                <div class="widget widget_upcoming_events">
                                    <h4 class="widget-title">Upcoming Events</h4>
                                    <ul>
                                        <li>
                                            <span class="event-date">
                                                <strong>Hari</strong>
                                                Bulan
                                            </span>
                                            <div class="text">
                                                <a href="#">Nama event</a>
                                                <span class="date">Tanggal event</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END / UPCOMING EVENTS -->


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / BLOG -->
        <!-- FOOTER -->
        @extends('frontend.footer')
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/bootstrap-select.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.themepunch.revolution.min.js')}}">
    </script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.appear.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/scripts.js')}}"></script>
</body>

</html>
