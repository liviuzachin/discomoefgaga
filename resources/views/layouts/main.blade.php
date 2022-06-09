<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="disco, moefgaga, moef, gaga, lloret, lloret de mar, 2022, best, club, party">

    <!-- Seo Meta -->
	@yield('title')
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/_/bootstrap/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/_/bootstrap/css/bootstrap-responsive.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/_/css/style.min.css" id="dark" media="screen" />
    <link rel="stylesheet" type="text/css" href="/_/css/icons/icons.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- RS SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="/_/rs-plugin/css/settings.css" media="screen" />
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/favicon.ico">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div id="layout" class="full">
        @if (Route::has('login'))

            <!-- popup login -->
            <div id="popupLogin">
                <div class="def-block widget">
                    <h4> Sign In </h4><span class="liner"></span>
                    <div class="widget-content row-fluid">
                        <form id="popup_login_form" action="#" method="post">
                            <input type="text" name="username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="username" placeholder="username">
                            <input type="password" name="password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
                            <!-- <a href="#" class="tbutton small"><span>Sign In</span></a> -->
                            <label><input type="checkbox" name="remember"> Remember Me </label>
                            <input type="submit" id="signIn" name="submit" value="Sign In" />
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="tbutton color2 small"><span>Register</span></a>
                            @endif
                            {{-- {{Form::token()}} --}}
                        </form><!-- login form -->
                    </div><!-- content -->
                </div><!-- widget -->
                <div id="popupLoginClose">x</div>
            </div><!-- popup login -->
            <div id="LoginBackgroundPopup"></div>
            <!-- popup login -->

            {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div> --}}
        @endif

        <header id="header" class="glue">
            <div class="row clearfix">
                <div class="little-head">
                    @if(Auth::check())
                        <div id="Logout_PopUp_Link" class="sign-btn tbutton small"><span><a href="{{URL::route('account-sign-out')}}">Sign Out {{Auth::user()->username}}</a></span></div>
                    @else
                    <!-- <div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Sign In</span></div> -->
                    @endif
                    <div class="social social-head">
                        <a href="http://twitter.com/MoefGagaLloret" class="bottomtip" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="http://fb.com/MoefGagaLloret" class="bottomtip" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
                        {{-- <a href="https://plus.google.com/101251360277637856052" class="bottomtip" title="GooglePlus" target="_blank"><i class="icon-google-plus"></i></a> --}}
                        <a href="http://instagram.com/discomoefgaga" class="bottomtip" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCLVkv5twmpPuaQGAMYAahmA" class="bottomtip" title="YouTube" target="_blank"><i class="icon-youtube"></i></a>
                        {{-- <a href="https://soundcloud.com" class="bottomtip" title="Soundcloud" target="_blank"><i class="icon-cloud"></i></a> --}}
                    </div><!-- end social -->

                    <div class="search">
                    <p>Connect with us !</p>
                        <!-- <form action="" id="search" method="get">
                            <input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>end form -->
                    </div> <!-- search -->
                </div><!-- little head -->
            </div><!-- row -->

            <div class="headdown">
                <div class="row clearfix">
                    <div class="logo bottomtip" title="Best and Most Popular Club in Lloret de Mar">
                        <a href="/"><img src="/images/moef-gaga-disco-logo.png" alt="Best and Most Popular Club in Lloret de Mar"></a>
                    </div><!-- end logo -->

                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="/">Home<span class="sub">party here</span></a></li>
                            <li><a href="/events">Events<span class="sub">view all events</span></a></li>
                            <li><a href="/videos">Videos<span class="sub">latest clips</span></a></li>
                            <li><a href="/photos">Photos<span class="sub">photo gallery</span></a></li>
                            <li><a href="/contact">Contact<span class="sub">contact us</span></a></li>
                        </ul><!-- end menu -->
                    </nav><!-- end nav -->
                </div><!-- row -->
            </div><!-- headdown -->
        </header><!-- end header -->

		@yield('content')

        {{-- {{ $slot }} --}}

		<footer id="footer">
            <div class="footer-last">
                <div class="row clearfix">
                    <span class="copyright">© {{ date('Y') }} <a href="/">Moef Gaga</a>. All Rights Reserved. <a href="#">Terms of use</a>.</span>
                    <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
                    <div class="foot-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/events">Events</a></li>
                            <li><a href="/videos">Videos</a></li>
                            <li><a href="/photos">Photos</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end foot menu -->
                </div><!-- row -->
            </div><!-- end last -->
        </footer><!-- end footer -->

	</div><!-- end layout -->

    <!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="/_/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="/_/js/script.min.js"></script>
	<script type="text/javascript" src="/_/bootstrap/js/bootstrap.min.js"></script>

	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="/_/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="/_/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay:"none",
                delay:10000,
                startwidth:1170,
                startheight:700,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                touchenabled:"on",
                onHoverStop:"on",
                fullWidth:"off",
                fullScreen:"off",
                spinner:"spinner4",
                stopLoop:"off",
            });
        });
	</script>
	<!-- END REVOLUTION SLIDER -->

	<script src="/_/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/_/js/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="/_/js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="/_/js/custom.min.js"></script>

	@yield('postscripts')

</body>
</html>
