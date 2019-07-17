<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

	<!-- META FOR IOS & HANDHELD -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<!-- //META FOR IOS & HANDHELD -->

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>


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
                            <li><a href="{{url('frontend/')}}">Home</a></li>
                            <li><a href="{{url('frontend/about')}}">About</a></li>
                            <li><a href="{{url('frontend/contact')}}">Contact</a></li>
                            <li><a href="{{url('/')}}">Login</a></li>
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

        <!--BANNER -->
        <section class="section-sub-banner bg-9">
            <div></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                    </div>
                </div>

            </div>

        </section>
        <!-- END BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">

                            <div class="text">
                                <h2>Contact</h2>
                                <p>Untuk informasi lebih lanjut mengenai website Sistem Informasi Geografis untuk pemetaan Perguruan Tinggi yang ada di Cirebon bisa menghubungi kami melalui : </p>
                                <ul>
                                    <li><i class="icon lotus-icon-location"></i>Ds.Marikange Blok Kajen Kidul Kec.Plumbon Kab.Cirebon</li>
                                    <li><i class="icon lotus-icon-phone"></i>0895372298625</li>
                                    <li><i class="icon fa fa-envelope-o"></i>okidorvel404@gmail.com</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text"  name="name" placeholder="Name" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="field-text" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" name="subject" placeholder="Subject" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write you message" required></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="awe-btn awe-btn-14">SEND</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

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
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/lib/jquery.validate.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('theme/js/scripts.js') }}"></script>
</body>
</html>
