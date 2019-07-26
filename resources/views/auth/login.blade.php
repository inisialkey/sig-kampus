<!DOCTYPE html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>SIGKAMPUS - LOGIN</title>

    <meta name="author" content="Oki">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- Stylesheets -->
    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

</head>

<body>
    <!-- Page Container -->

    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('assets/img/bg-login.jpg');">
                <div class="row mx-0 bg-black-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 invisible" data-toggle="appear">
                            <p class="font-size-h3 font-w600 text-white">
                                Welcome to SIG KAMPUS
                            </p>
                            <p class="font-italic text-white-op">
                                Copyright &copy; <span class="js-year-copy">{{date('Y')}}</span> by TEAM 1 SIG
                            </p>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible"
                        data-toggle="appear" data-class="animated fadeInRight">
                        <div class="content content-full">
                            <!-- Header -->
                            <div class="px-30 py-10">
                                <a class="link-effect font-w700" href="#">
                                    <i class=""></i>
                                    <span class="font-size-xl text-primary-dark">SIG</span><span
                                        class="font-size-xl text-success">KAMPUS</span>
                                </a>

                                <h1 class="h3 font-w700 mt-30 mb-10">Sign In to SIG KAMPUS</h1>
                                <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                            </div>
                            <!-- END Header -->

                            <form class="js-validation-signin px-30"
                                action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input id="email" type="text" class="form-control" name="email"
                                            value="{{ old('email') }}" required autofocus >
                                            <label class="email">Email</label>
                                        </div>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input id="password" type="password" class="form-control" name="password"
                                            required>
                                            <label class="password">Password</label>
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                        <i class="si si-login mr-10"></i> Login
                                    </button>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <a href="{{ url('/auth/facebook')}}" class="btn btn-facebook">
                                            <i class="fa fa-facebook">
                                            Login with Facebook
                                            </i>
                                        </a>
                                        <a href="{{ url('/auth/github')}}" class="btn btn-github">
                                            <i class="fa fa-github">
                                                Login with Github
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase Core JS -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/js.cookie.min.js') }}"></script>
    <script src="{{ asset('assets/js/codebase.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/op_auth_signin.js') }}"></script>
</body>

</html>
