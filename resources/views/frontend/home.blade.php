<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Welcome to SIGKampus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="#" />

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
    <link rel="stylesheet" type="text/css" href="{{ ('theme/css/style.css') }}">

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
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-right">
                        <span><i class="lotus-icon-location"></i> Ds.Marikangen Blok Kajen Kidul</span>
                        <span><i class="lotus-icon-phone"></i>0895372298625</span>
                    </div>

                </div>
            </div>

            <!-- END / HEADER TOP -->

            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="#" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->

                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                             <li><a href="#">Data Kampus</a></li>
                            <li><a href="#">Peta Kampus</a></li>
                            <li><a href="{{url('frontend/about')}}">About</a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>

            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->

        <!-- BANNER SLIDER -->
        <section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                   {{-- foreach --}}
                    <li data-transition="fade">
                        <img src="images/stikom2.jpg" data-bgposition="left center"
                            data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center"
                            data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center"
                            data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                            {{-- Caption 1 --}}
                            <h1 color="white">Welcome to SIGKampus</h1>
                        </div>


                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                            data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">
                            <h3>Sistem Informasi Berbasis Web Untuk Pemetaan Lokasi Kampus</h3>
                        </div>
                    </li>
                    {{-- EndForeach --}}

                    <li data-transition="fade">
                        <img src="images/stikom1.jpg" data-bgposition="left center"
                            data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center"
                            data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        </div>

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center"
                            data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                            {{-- Caption 1 --}}
                            <h1 color="white">Welcome to SIGKampus</h1>
                        </div>


                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                            data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">
                            <h3>Sistem Informasi Berbasis Web Untuk Pemetaan Lokasi Kampus</h3>
                        </div>
                    </li>
                    {{-- EndForeach --}}

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
                            <h2>DATA KAMPUS</h2>
                        </div>
                        <div class="col-lg-9">
                            <div class="availability-form">
                                <div class="vailability-submit">
                                    <a href="#" class="awe-btn awe-btn-13">PETA KAMPUS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        <!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; SIGKampus All rights reserved | Developed By <a href="#" target="_blank" style="color: #fff;">Oki Dorvel</a> </p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>

        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/scripts.js') }}"></script>
</body>

</html>
