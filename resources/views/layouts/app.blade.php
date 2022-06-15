<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Birel</title>
    <!--      Favicon-->
    <link href="{{ asset('img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">

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
                <svg width="67" height="28" viewBox="0 0 67 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 13.7C16.7 14.6 18.3 16.6 18.3 20C18.3 22.1 17.6 23.8 16.3 25.1C15 26.4 13.1 27 10.7 27H0.5V1.8H8.5C11 1.8 13 2.4 14.4 3.6C15.8 4.8 16.5 6.5 16.5 8.6C16.5 9.8 16.2 10.8 15.7 11.7C15.2 12.6 14.5 13.3 13.5 13.7ZM8.5 5.7H4.9V12.4H8.9C10 12.4 10.8 12.1 11.4 11.5C12 10.9 12.3 10 12.3 9C12.3 8 12 7.2 11.3 6.6C10.6 6 9.7 5.7 8.5 5.7ZM9.8 23.1C11.1 23.1 12.2 22.8 12.8 22.1C13.5 21.4 13.8 20.6 13.8 19.6C13.8 18.6 13.4 17.7 12.7 17C12 16.3 11 16 9.6 16H4.9V23.2H9.8V23.1ZM23.9 6C23.2 6 22.6 5.7 22 5.2C21.5 4.7 21.2 4.1 21.2 3.4C21.2 2.7 21.5 2.1 22 1.6C22.5 1.1 23.1 0.8 23.9 0.8C24.6 0.8 25.2 1.1 25.7 1.6C26.2 2.1 26.5 2.7 26.5 3.4C26.5 4.1 26.2 4.7 25.7 5.2C25.2 5.8 24.6 6 23.9 6ZM21.6 27V9.2H26V27H21.6ZM34.7 12.1C35.2 11.2 35.9 10.5 37 9.9C38.1 9.3 39.2 9 40.5 9V13C38.6 13 37.2 13.4 36.3 14.2C35.4 15 34.9 16.3 34.9 18.1V27H30.5V9.2H34.7V12.1ZM58.8 17.8L58.7 18.9H45.3C45.4 20.5 45.9 21.7 46.8 22.6C47.7 23.4 48.9 23.9 50.2 23.9C51.2 23.9 52 23.7 52.7 23.2C53.4 22.7 54 22.1 54.4 21.2L58.4 21.9C57.8 23.6 56.8 25 55.3 26C53.8 27 52.1 27.5 50.2 27.5C47.4 27.5 45.1 26.7 43.4 25C41.9 23.2 41 21 41 18.1C41 15.2 41.8 13 43.5 11.3C45.2 9.6 47.4 8.8 50.1 8.8C51.4 8.8 52.5 9 53.5 9.4C54.5 9.8 55.5 10.3 56.2 11C57 11.7 57.6 12.7 58 13.8C58.6 15 58.8 16.3 58.8 17.8ZM50.2 12C48.9 12 47.9 12.3 47.1 13C46.3 13.7 45.7 14.6 45.5 16H54.5C54.4 14.7 53.9 13.7 53.2 13C52.4 12.3 51.4 12 50.2 12ZM61.9 27V0H66.3V27H61.9Z" fill="#573CDA"/>
                </svg>
            </a>
            <nav class="header-nav">
                <menu class="header-menu">
                    <li class="header-menu-item">
                        <a class="link {{ Route::is('mission') ? 'active' : '' }}" href="{{ route('mission')}}">
                            Mission
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link {{ Route::is('explore') ? 'active' : '' }}" href="{{ route('explore')}}">
                            Explore
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link {{ Route::is('pricing') ? 'active' : '' }}" href="{{ route('pricing')}}">
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <input type="submit" class="btn2 btn2-green w170" value="{{ __('Logout') }}">
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
                        <a class="link {{ Route::is('mission') ? 'active' : '' }}" href="{{ route('mission')}}">
                            Mission
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link {{ Route::is('explore') ? 'active' : '' }}" href="{{ route('explore')}}">
                            Explore
                        </a>
                    </li>
                    <li class="header-menu-item">
                        <a class="link {{ Route::is('pricing') ? 'active' : '' }}" href="{{ route('pricing')}}">
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <input type="submit" class="btn2 btn2-green w170" value="{{ __('Logout') }}">
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
                <a href="/">
                    <svg width="67" height="28" viewBox="0 0 67 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5 13.7C16.7 14.6 18.3 16.6 18.3 20C18.3 22.1 17.6 23.8 16.3 25.1C15 26.4 13.1 27 10.7 27H0.5V1.8H8.5C11 1.8 13 2.4 14.4 3.6C15.8 4.8 16.5 6.5 16.5 8.6C16.5 9.8 16.2 10.8 15.7 11.7C15.2 12.6 14.5 13.3 13.5 13.7ZM8.5 5.7H4.9V12.4H8.9C10 12.4 10.8 12.1 11.4 11.5C12 10.9 12.3 10 12.3 9C12.3 8 12 7.2 11.3 6.6C10.6 6 9.7 5.7 8.5 5.7ZM9.8 23.1C11.1 23.1 12.2 22.8 12.8 22.1C13.5 21.4 13.8 20.6 13.8 19.6C13.8 18.6 13.4 17.7 12.7 17C12 16.3 11 16 9.6 16H4.9V23.2H9.8V23.1ZM23.9 6C23.2 6 22.6 5.7 22 5.2C21.5 4.7 21.2 4.1 21.2 3.4C21.2 2.7 21.5 2.1 22 1.6C22.5 1.1 23.1 0.8 23.9 0.8C24.6 0.8 25.2 1.1 25.7 1.6C26.2 2.1 26.5 2.7 26.5 3.4C26.5 4.1 26.2 4.7 25.7 5.2C25.2 5.8 24.6 6 23.9 6ZM21.6 27V9.2H26V27H21.6ZM34.7 12.1C35.2 11.2 35.9 10.5 37 9.9C38.1 9.3 39.2 9 40.5 9V13C38.6 13 37.2 13.4 36.3 14.2C35.4 15 34.9 16.3 34.9 18.1V27H30.5V9.2H34.7V12.1ZM58.8 17.8L58.7 18.9H45.3C45.4 20.5 45.9 21.7 46.8 22.6C47.7 23.4 48.9 23.9 50.2 23.9C51.2 23.9 52 23.7 52.7 23.2C53.4 22.7 54 22.1 54.4 21.2L58.4 21.9C57.8 23.6 56.8 25 55.3 26C53.8 27 52.1 27.5 50.2 27.5C47.4 27.5 45.1 26.7 43.4 25C41.9 23.2 41 21 41 18.1C41 15.2 41.8 13 43.5 11.3C45.2 9.6 47.4 8.8 50.1 8.8C51.4 8.8 52.5 9 53.5 9.4C54.5 9.8 55.5 10.3 56.2 11C57 11.7 57.6 12.7 58 13.8C58.6 15 58.8 16.3 58.8 17.8ZM50.2 12C48.9 12 47.9 12.3 47.1 13C46.3 13.7 45.7 14.6 45.5 16H54.5C54.4 14.7 53.9 13.7 53.2 13C52.4 12.3 51.4 12 50.2 12ZM61.9 27V0H66.3V27H61.9Z" fill="#ffffff"/>
                    </svg>
                </a>
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
                        <a class="t-r f18-l32 white" href="{{ route('mission') }}">Mission</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 white" href="{{ route('explore') }}">Explore</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 white" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                </ul>
            </div>
            <div class="footer-nav2">
                <ul class="list-nav">
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 grey-lite" href="{{ route('terms-of-use') }}">Terms of Use</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 grey-lite" href="{{ route('privacy-policy') }}">Privacy policy</a>
                    </li>
                    <li class="list-nav-item">
                        <a class="t-r f18-l32 grey-lite" href="{{ route('disclaimer') }}">Further Disclaimer</a>
                    </li>
                </ul>
            </div>
            <address class="footer-mail">
                <p class="t-r f18-l32 white" >Birel OÜ , Estonia</p>
                <p class="t-r f18-l32 white">E–mail: <a class="t-r f18-l32 white" href="mailto:orders@birel.io">
                        orders@birel.io</a></p>
                <p class="t-r f18-l32 grey-lite wg">Development <a class="t-r f18-l32 grey-lite"
                                                                   href="https://webgenerator.com.ua/" target="_blank">WG-Studio</a>
                </p>
            </address>
        </div>
    </div>
</footer>

<script src="{{ asset('js/default/default.js')}}"></script>

@yield('front_scripts')
</body>

</html>
