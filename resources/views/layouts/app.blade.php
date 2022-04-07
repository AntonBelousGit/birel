<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/lib/iconmoon.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/default/style.min.css') }}">
    @yield('front_style')

</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-container">
            <a class="header-logo" href="/">
                <svg width="61" height="26" viewBox="0 0 61 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.404297 0.800159V26.0002H5.8763C10.0883 26.0002 12.4283 23.7322 12.4283 19.5922V19.3762C12.4283 15.8482 10.7363 13.7602 8.1443 13.2202V13.0402C10.4123 12.4282 11.7803 10.5562 11.7803 7.20816V7.06416C11.7803 2.99616 9.5843 0.800159 5.5883 0.800159H0.404297ZM2.5643 2.70816H5.5883C8.2883 2.70816 9.6203 4.14816 9.6203 7.06416V7.85616C9.6203 10.7722 8.2883 12.2122 5.5883 12.2122H2.5643V2.70816ZM2.5643 14.1202H5.7323C8.6483 14.1202 10.1603 15.6682 10.1603 18.6562V19.5922C10.1603 22.5802 8.7203 24.0922 5.8403 24.0922H2.5643V14.1202ZM16.1177 0.800159V26.0002H18.2777V0.800159H16.1177ZM22.5148 0.800159V26.0002H24.6748V15.1282H27.9508C30.5068 15.1282 31.9828 16.7482 31.9828 19.5562V20.8522C31.9828 22.8682 31.9828 24.6322 32.3428 26.0002H34.5028C34.2148 24.8482 34.1428 23.5522 34.1428 20.8882V20.3122C34.1428 17.0002 32.5948 14.8402 30.3628 14.2642V14.0842C32.5948 13.5082 34.1428 11.3122 34.1428 7.74816V7.56816C34.1428 3.24816 31.8388 0.800159 27.9868 0.800159H22.5148ZM24.6748 2.70816H27.9508C30.5068 2.70816 31.9828 4.43616 31.9828 7.42416V8.50416C31.9828 11.4922 30.5068 13.2202 27.9508 13.2202H24.6748V2.70816ZM47.3646 2.67216V0.76416H38.5446V26.0002H47.6526V24.0922H40.7046V13.9402H47.1126V12.0322H40.7046V2.67216H47.3646ZM51.2355 0.76416V26.0002H60.0555V24.0922H53.3955V0.76416H51.2355Z"
                        fill="#573CDA"/>
                </svg>
            </a>
            <nav class="header-nav">
                <menu class="header-menu">
                    <li class="header-menu-item">
                        <a class="link" href="{{ route('mission')}}">
                            Mission
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link" href="{{ route('explore')}}">
                            Explore
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link" href="#">
                            Pricing
                        </a>
                    </li>
                </menu>
            </nav>
            <div class="btn-group">
                @guest
                    <a class="btn3" href="{{ route('login') }}">
                        <i class="icon-user"></i>
                        Login
                    </a>
                    <a class="btn2 btn2-green w170" href="{{ route('register') }}">
                        Sign up Free
                    </a>
                @endguest
                @auth
                    <a class="btn3" href="{{ route('home') }}">
                        <i class="icon-user"></i>
                        {{ Auth::user()->name }}
                    </a>
                    <a class="btn2 btn2-green w170" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </div>

            <div class="burger">
                <button class="reset-btn" id="menu">
                    <i class="icon-burger"></i>
                    <i class="icon-close"></i>
                </button>
            </div>
        </div>
        <div class="drop-down">
            <nav class="header-nav">
                <menu class="header-menu">
                    <li class="header-menu-item">
                        <a class="link" href="#">
                            Mission
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link" href="#">
                            Explore
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link" href="#">
                            Pricing
                        </a>
                    </li>
                </menu>
            </nav>
            <div class="btn-group">
                @guest
                    <a class="btn3" href="{{ route('login') }}">
                        <i class="icon-user"></i>
                        {{ __('Login') }}
                    </a>
                    <a class="btn2 btn2-green w170" href="{{ route('register') }}">
                        Sign up Free
                    </a>
                @endguest
            </div>

            @auth
                <div class="btn-group">
                    <a class="btn3" href="{{ route('login') }}">
                        <i class="icon-user"></i>
                        {{ Auth::user()->name }}
                    </a>
                    <a class="btn2 btn2-green w170" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
    </div>
    </div>
</header>

@yield('content')

<footer class="footer-bg">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-logo">
                <svg width="61" height="26" viewBox="0 0 61 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.404297 0.800159V26.0002H5.8763C10.0883 26.0002 12.4283 23.7322 12.4283 19.5922V19.3762C12.4283 15.8482 10.7363 13.7602 8.1443 13.2202V13.0402C10.4123 12.4282 11.7803 10.5562 11.7803 7.20816V7.06416C11.7803 2.99616 9.5843 0.800159 5.5883 0.800159H0.404297ZM2.5643 2.70816H5.5883C8.2883 2.70816 9.6203 4.14816 9.6203 7.06416V7.85616C9.6203 10.7722 8.2883 12.2122 5.5883 12.2122H2.5643V2.70816ZM2.5643 14.1202H5.7323C8.6483 14.1202 10.1603 15.6682 10.1603 18.6562V19.5922C10.1603 22.5802 8.7203 24.0922 5.8403 24.0922H2.5643V14.1202ZM16.1177 0.800159V26.0002H18.2777V0.800159H16.1177ZM22.5148 0.800159V26.0002H24.6748V15.1282H27.9508C30.5068 15.1282 31.9828 16.7482 31.9828 19.5562V20.8522C31.9828 22.8682 31.9828 24.6322 32.3428 26.0002H34.5028C34.2148 24.8482 34.1428 23.5522 34.1428 20.8882V20.3122C34.1428 17.0002 32.5948 14.8402 30.3628 14.2642V14.0842C32.5948 13.5082 34.1428 11.3122 34.1428 7.74816V7.56816C34.1428 3.24816 31.8388 0.800159 27.9868 0.800159H22.5148ZM24.6748 2.70816H27.9508C30.5068 2.70816 31.9828 4.43616 31.9828 7.42416V8.50416C31.9828 11.4922 30.5068 13.2202 27.9508 13.2202H24.6748V2.70816ZM47.3646 2.67216V0.76416H38.5446V26.0002H47.6526V24.0922H40.7046V13.9402H47.1126V12.0322H40.7046V2.67216H47.3646ZM51.2355 0.76416V26.0002H60.0555V24.0922H53.3955V0.76416H51.2355Z"
                        fill="#ffffff"/>
                </svg>
                <ul class="list-soc">
                    <li class="list-soc-item">
                        <a href="#">
                            <i class="icon-linkidin"></i>
                        </a>
                    </li>
                    <li class="list-soc-item">
                        <a href="#">
                            <i class="icon-telegram-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-copyright">
                <p class="t-r f18-l32 white">
                    © 2021 Birel
                </p>
            </div>
            <div class="footer-nav1">
                <ul class="list-nav">
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 white" href="#">Mission</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 white" href="#">Explore</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 white" href="#">Pricing</a>
                    </li>

                </ul>
            </div>
            <div class="footer-nav2">
                <ul class="list-nav">
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 grey-lite" href="#">Privacy policy</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 grey-lite" href="#">Company detail</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 grey-lite" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="footer-mail">
                <form action="#">
                    <label>
                        <input class="i-f grey-lite" type="email" placeholder="Your e-mail">
                        <button class="reset-btn" type="submit"><i class="icon-telegram-2"></i></button>
                    </label>
                </form>
                <p class="t-r f18-l32 white">E–mail: <a class="t-r f18-l32 white" href="mailto:orders@birel.io">
                        orders@birel.io</a></p>
                <p class="t-r f18-l32 grey-lite wg">Development <a class="t-r f18-l32 grey-lite"
                                                                   href="https://webgenerator.com.ua/" target="_blank">WG-Studio</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/default/default.js')}}"></script>

@yield('front_scripts')
</body>

</html>
