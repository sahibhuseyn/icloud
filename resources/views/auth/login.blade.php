<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>



    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="" />

    <!-- Page Title -->
    <title>iCloud Unlock</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ url('/uploads/favicon.ico') }}" rel="shortcut icon" type="image/png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/uploads/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/uploads/favicon-32x32.png') }}">
    <link href="{{ url('/uploads/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ url('/uploads/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ url('/uploads/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/uploads/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ url('/uploads/manifest.json') }}">
    <link rel="mask-icon" href="{{ url('uploads/safari-pinned-tab.svg') }}" color="#01007a">
    <meta name="theme-color" content="#01007a">

    <!-- Stylesheet -->
    <link href="{{ url('/client/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/client/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/client/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/client/css/css-plugin-collections.css') }}" rel="stylesheet"/>

    <link id="menuzord-menu-skins" href="{{ url('/client/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ url('/client/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ url('/client/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ url('/client/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ url('/client/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <link href="{{ url('/client/css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ url('/client/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ url('/client/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('/client/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ url('/client/js/jquery-plugin-collection.js') }}"></script>




</head>
<body>


<!-- preloader -->
<div id="preloader">
    <div id="spinner">
        <div class="preloader-dot-loading">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
</div>



<!-- start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax fullscreen layer-overlay overlay-white-9" data-bg-img="{{ url('uploads/bg1.jpg') }}">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <div class="text-center mb-60"><a href="{{ route('index') }}" class=""><img alt="" src="{{ url('/uploads/logo-wide.png') }}"></a></div>
                            <h4 class="text-theme-colored mt-0 pt-5"> Login</h4>
                            <form  class="form-transparent clearfix" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="form-group col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Username/Email</label>
                                        <input id="email" type="email" class="form-control text-black" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12{{ $errors->has('password') ? ' has-error' : '' }} ">
                                        <label for="password">Password</label>
                                        <input id="password" name="password" class="form-control text-black" type="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="checkbox pull-left mt-15">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                                <div class="form-group pull-right mt-10">
                                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                                </div>
                                <div class="clear text-center pt-10">
                                    <a class="text-theme-colored font-weight-600 font-12" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

<!-- Footer -->
<footer id="footer" class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0">Copyright © {{ date('Y') }}. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->


<script src="{{ url('/client/js/custom.js') }}"></script>


</body>

</html>