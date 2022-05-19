<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Birel-lc</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/lib/select2.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/default/style-lc.min.css') }}">
    @yield('style')
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header-box">
            <button class="header-burger reset-btn" type="button">
                <i class="icon icon-burger"></i>
                <i class="icon icon-close"></i>
            </button>
            <a class="header-logo" href="{{route('companies.index')}}">
                <svg width="61" height="26" viewBox="0 0 61 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.404 0.799998V26H5.876C10.088 26 12.428 23.732 12.428 19.592V19.376C12.428 15.848 10.736
                     13.76 8.144 13.22V13.04C10.412 12.428 11.78 10.556 11.78 7.208V7.064C11.78 2.996 9.584 0.799998
                      5.588 0.799998H0.404ZM2.564 2.708H5.588C8.288 2.708 9.62 4.148 9.62 7.064V7.856C9.62 10.772 8.288
                       12.212 5.588 12.212H2.564V2.708ZM2.564 14.12H5.732C8.648 14.12 10.16 15.668 10.16
                       18.656V19.592C10.16 22.58 8.72 24.092 5.84 24.092H2.564V14.12ZM16.1174
                       0.799998V26H18.2774V0.799998H16.1174ZM22.5145 0.799998V26H24.6745V15.128H27.9505C30.5065
                        15.128 31.9825 16.748 31.9825 19.556V20.852C31.9825 22.868 31.9825 24.632 32.3425
                         26H34.5025C34.2145 24.848 34.1425 23.552 34.1425 20.888V20.312C34.1425 17 32.5945 14.84
                         30.3625 14.264V14.084C32.5945 13.508 34.1425 11.312 34.1425 7.748V7.568C34.1425 3.248 31.8385
                          0.799998 27.9865 0.799998H22.5145ZM24.6745 2.708H27.9505C30.5065 2.708 31.9825 4.436 31.9825
                          7.424V8.504C31.9825 11.492 30.5065 13.22 27.9505 13.22H24.6745V2.708ZM47.3643
                          2.672V0.763999H38.5443V26H47.6523V24.092H40.7043V13.94H47.1123V12.032H40.7043V2.672H47.3643ZM51.2352
                          0.763999V26H60.0552V24.092H53.3952V0.763999H51.2352Z" fill="white"/>
                </svg>
            </a>
            <div class="header-r">
                <ul class="header-list">
                    <li class="header-list-item">
                        <button id="h-n-b" class="reset-btn" type="button">
                            <i class="icon icon-bells"></i>
                            <span class="counter">2</span>
                        </button>
                        <div class="notice-popup">
                            <ul class="notice_list">
                                <li class="notice_item new">
                                    <div class="user-avatar s">
                                        <span class="t-sb purple1">SD</span>
                                    </div>
                                    <span class="notice_item-link t-r purple3">
                                        User <a class="t-sb purple1" href="#">user1</a> accept/denied your request to move to a new stage
                                    </span>
                                    <span class="notice_item-hour t-r">1 hour</span>
                                </li>
                                <li class="notice_item new">
                                    <div class="user-avatar s">
                                        <span class="t-sb purple1">SD</span>
                                    </div>
                                    <span class="notice_item-link t-r purple3">
                                        You got a new offer from<a class="t-sb purple1" href="#"> user2</a>
                                    </span>
                                    <span class="notice_item-hour t-r">999 hour</span>
                                </li>
                                <li class="notice_item">
                                    <div class="user-avatar s">
                                        <span class="t-sb purple1">SD</span>
                                    </div>
                                    <span class="notice_item-link t-r purple3">
                                        User <a class="t-sb purple1" href="#">user1</a> accept/denied your request to move to a new stage
                                    </span>
                                    <span class="notice_item-hour t-r">999 hour</span>
                                </li>
                                <li class="notice_item">
                                    <div class="user-avatar s">
                                        <span class="t-sb purple1">SD</span>
                                    </div>
                                    <span class="notice_item-link t-r purple3">
                                        You got a new offer from<a class="t-sb purple1" href="#"> user2</a>
                                    </span>
                                    <span class="notice_item-hour t-r">999 hour</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-list-item">
                        <a href="#">
                            <i class="icon icon-mail"></i>
                            <span class="counter">24</span>
                        </a>
                    </li>
                </ul>
                <div class="header-user">
                    <div class="user-avatar">
                        <span class="t-sb f18-l25 purple1"> {{ substr(Auth::user()->surname, 0,1)}}{{substr(Auth::user()->name, 0,1)}}</span>
                    </div>
                    <div class="header-user-menu">
                        <div class="menu-name arrow-icon">
                            {{ Auth::user()->surname}} {{substr(Auth::user()->name, 0,1)}}.
                        </div>
                    </div>
                    <div class="menu-box">
                        <ul class="menu-list">
                            <li class="menu-list-item">
                                <a class="icon icon-log-user-white" href="{{ route('home') }}">Account</a>
                            </li>
                            <li class="menu-list-item">
                                <a class="icon icon-log-case-white" href="{{ route('orders') }}">My Orders</a>
                            </li>
                            <li class="menu-list-item">
                                <a class="icon icon-log-case-white" href="#">Settings</a>
                            </li>
                            <li class="menu-list-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    <button type="submit" class="reset-btn icon icon-log-out-white" value="{{ __('Log out') }}">{{ __('Log out') }}</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="notification active">
            <p class="t-r f14-l16 purple1">Your order has been successfully saved and will be published after moderator approval</p>
            <button class="reset-btn" type="button">
                <i class="icon icon-close-green"></i>
            </button>
        </div>
    </div>
</header>
<main class="bg-site">
    <div class="box-container">
        @include('layouts.side_menu')
        @yield('content')
    </div>
</main>
<footer class="footer-bg">
    <div class="container">
        <ul class="header-list">
            <li class="header-list-item">
                <button id="f-n-b" class="reset-btn" type="button">
                    <i class="icon icon-bells"></i>
                    <span class="counter">2</span>
                </button>
            </li>
            <li class="header-list-item">
                <a href="#">
                    <i class="icon icon-mail"></i>
                    <span class="counter">24</span>
                </a>
            </li>
        </ul>
    </div>
</footer>
<div class="bg-purple"></div>

<div class="notice-popup-f" id="popup-3">
	<ul class="notice_list">
		<li class="notice_item new">
			<div class="user-avatar s">
				<span class="t-sb purple1">SD</span>
			</div>
			<span class="notice_item-link t-r  purple3">
				User <a class="t-sb purple1" href="#">user1</a> accept/denied your request to move to a new stage
			</span>
			<span class="notice_item-hour t-r ">1 hour</span>
		</li>
		<li class="notice_item new">
			<div class="user-avatar s">
				<span class="t-sb purple1">SD</span>
			</div>
			<span class="notice_item-link t-r purple3">
				You got a new offer from<a class="t-sb purple1" href="#"> user2</a>
			</span>
			<span class="notice_item-hour t-r">999 hour</span>
		</li>
	</ul>
</div>

<div class="popUp-message-manager" id="popup-1">
    <div class="popUp-close">
        <button class="reset-btn" type="button">
            <i class="icon icon-close-green"></i>
        </button>
    </div>
    <form class="popUp-message-form" action="{{ route('frontend-question') }}" method="POST">
        @csrf
        <h2 class="t-sb f22-l25 purple3">
            Ask Birel a Question
        </h2>
        <p class="t-r f16-l24 purple2">
            Enter your question or request for your Private Securities Specialist. All communications with Birel are
            kept confidential.
        </p>
        <label class="t-r f16-l24 purple1" for="theme">
            Theme subject
        </label>
        <select id="theme" class="js-example-basic-single-no-search" name="theme">
            <option value="N/A">Choose</option>
            <option value="Orders">Orders</option>
            <option value="Companies">Companies</option>
            <option value="Platform">Platform</option>
            <option value="Other">Other</option>
        </select>
        <label class="t-r f16-l24 purple1" for="message">
            How can we help?
        </label>
        <textarea name="text" id="message" cols="30" rows="10" placeholder="Placeholder text" required></textarea>
        <button class="btn w115">
            Send
        </button>
    </form>
</div>
<div class="popUp-message-manager" id="popup-2">
    <div class="popUp-close">
        <button class="reset-btn" type="button">
            <i class="icon icon-close-green"></i>
        </button>
    </div>
    <form class="popUp-message-form" action="{{ route('frontend-question') }}" method="POST">
        @csrf
        <h2 class="t-sb f22-l25 purple3">
            suggestions for the platform
        </h2>
        <p class="t-r f16-l24 purple2">
            Here you can leave your wishes and comments about the work of the Birel platform.
        </p>
        <label class="t-r f16-l24 purple1" for="message2">
            Your comments
        </label>
        <input type="hidden" name="theme" value="Question">
        <textarea name="text" id="message2" cols="30" rows="10" placeholder="Placeholder text" required></textarea>
        <button class="btn w115">
            Send
        </button>
    </form>
</div>
<script src="{{asset('js/lib/jquery.min.js')}}"></script>
<script src="{{asset('js/lib/select2.min.js')}}"></script>
<script src="{{asset('js/default/default-lc.js')}}" type="module"></script>
@yield('scripts')

</body>

</html>
