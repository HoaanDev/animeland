<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AnimeLand | @yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/sal.css') }}" />

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-266165434-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-266165434-1");
    </script>
    <script type="text/javascript">
        (function () {
            window.__insp = window.__insp || [];
            __insp.push(["wid", 142940862]);
            var ldinsp = function () {
                if (typeof window.__inspld != "undefined") return;
                window.__inspld = 1;
                var insp = document.createElement("script");
                insp.type = "text/javascript";
                insp.async = true;
                insp.id = "inspsync";
                insp.src =
                    ("https:" === document.location.protocol ? "https" : "http") +
                    "://cdn.inspectlet.com/inspectlet.js?wid=142940862&r=" +
                    Math.floor(new Date().getTime() / 3600000);
                var x = document.getElementsByTagName("script")[0];
                x.parentNode.insertBefore(insp, x);
            };
            setTimeout(ldinsp, 0);
        })();
    </script>
</head>

<body class="sticky-header">
<!-- Preloader -->
<div id="preloader">
    <img src="media/Anime-loop-preloader-white.gif" alt="preloader" class="mb-5" />
</div>
<!-- Back To Top Start -->
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- Back To Top End -->

<!-- Main Wrapper Start -->
<div class="main-wrapper" id="main-wrapper">
    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="header style-1">
        <div class="container">
            <!-- Start Mainmanu Nav -->
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{  route('homepage') }}"><img src="{{ asset('media/animeland_logo.png') }}" class="img-fluid" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ms-auto mainmenu">
                        <li class="menu-item-has-children">
                            <a href="{{  route('homepage') }}" class="active">Anime</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{  route('filter') }}" class="active">Filter</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{  route('policy') }}" class="active">Privacy Policy</a>
                        </li>
                        @guest

                        @else
                            <li class="menu-item-has-children">
                                <a href="{{  route('profile') }}" class="active">Profile</a>
                            </li>
                        @endguest
                    </ul>
                    <form action="{{  route('search-results') }}">
                        <div class="input-group form-group header-search-box">
                            <button class="input-group-text anime-btn" type="submit">
                                <i class="fal fa-search"></i>
                            </button>
                            <input class="form-control" name="search" type="text" placeholder="Search" />
                        </div>
                    </form>
                    <div class="d-flex right-nav">
                        @guest
                            <a href="{{  route('register-user') }}" class="anime-btn btn-dark border-change me-3">Sign
                                Up</a>
                            <a href="{{  route('login') }}" class="anime-btn btn-dark">Sign In</a>
                        @else
                            <a href="{{  route('signout') }}" class="anime-btn btn-dark">Sign Out</a>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <!--=====================================-->
    <!--=           Footer Area Start       =-->
    <!--=====================================-->
    <footer class="footer">
        <div class="footer-main style-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 col-sm-12 col-12">
                        <div class="footer-widget">
                            <a href="{{  route('homepage') }}">
                                <img alt="" src="{{ asset('media/animeland_logo.png') }}" />
                            </a>
                            <p class="mt-3 mb-5">
                                Welcome to my website.
                            </p>
                            <h6 class="mb-2">Join Us on</h6>
                            <ul class="social-icons">
                                <li>
                                    <a href=""><img alt="" src="media/footer/reddit.png" /></a>
                                </li>
                                <li>
                                    <a href=""><img alt="" src="media/footer/discord.png" /></a>
                                </li>
                                <li>
                                    <a href=""><img alt="" src="media/footer/instagram.png" /></a>
                                </li>
                                <li>
                                    <a href=""><img alt="" src="media/footer/twitter.png" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 col-12">
                        <div class="footer-widget align-middle">
                            <h6>GET NOTIFIED</h6>
                            <p class="light-text">
                                Get emails for latest news about anime, and more.
                            </p>
                            <form action="home.html">
                                <div class="input-group form-group footer-email-box">
                                    <input class="form-control" type="email" name="email"
                                           placeholder="info@example.com" required />
                                    <button class="input-group-text anime-btn" type="submit">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                            <p class="text">
                                By subscribing you agree to our terms and conditions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-color-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="footer-copyright">
                                <span class="copyright-text">© 2023. All rights reserved by
                                    <a href="{{  route('homepage') }}">AnimeLand</a>.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer-bottom-link text-end">
                            <a href="{{  route('policy') }}">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Jquery Js -->
<script src="{{ asset('/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery-appear.js') }}"></script>
<script src="{{ asset('/js/vendor/sal.js') }}"></script>

<!-- Site Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
