<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!--      Favicon-->
    <link href="{{ asset('img/faviconlc.ico')}}" rel="shortcut icon" type="image/x-icon">
    <title>Birel-lc</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    @yield('meta')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    @yield('scripts_head')
    @yield('style')
    <link rel="stylesheet" href="{{asset('css/lib/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/default/style-lc.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/page-lc-message.min.css') }}">

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
                <svg width="67" height="28" viewBox="0 0 67 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5 13.7C16.7 14.6 18.3 16.6 18.3 20C18.3 22.1 17.6 23.8 16.3 25.1C15 26.4 13.1 27 10.7 27H0.5V1.8H8.5C11 1.8 13 2.4 14.4 3.6C15.8 4.8 16.5 6.5 16.5 8.6C16.5 9.8 16.2 10.8 15.7 11.7C15.2 12.6 14.5 13.3 13.5 13.7ZM8.5 5.7H4.9V12.4H8.9C10 12.4 10.8 12.1 11.4 11.5C12 10.9 12.3 10 12.3 9C12.3 8 12 7.2 11.3 6.6C10.6 6 9.7 5.7 8.5 5.7ZM9.8 23.1C11.1 23.1 12.2 22.8 12.8 22.1C13.5 21.4 13.8 20.6 13.8 19.6C13.8 18.6 13.4 17.7 12.7 17C12 16.3 11 16 9.6 16H4.9V23.2H9.8V23.1ZM23.9 6C23.2 6 22.6 5.7 22 5.2C21.5 4.7 21.2 4.1 21.2 3.4C21.2 2.7 21.5 2.1 22 1.6C22.5 1.1 23.1 0.8 23.9 0.8C24.6 0.8 25.2 1.1 25.7 1.6C26.2 2.1 26.5 2.7 26.5 3.4C26.5 4.1 26.2 4.7 25.7 5.2C25.2 5.8 24.6 6 23.9 6ZM21.6 27V9.2H26V27H21.6ZM34.7 12.1C35.2 11.2 35.9 10.5 37 9.9C38.1 9.3 39.2 9 40.5 9V13C38.6 13 37.2 13.4 36.3 14.2C35.4 15 34.9 16.3 34.9 18.1V27H30.5V9.2H34.7V12.1ZM58.8 17.8L58.7 18.9H45.3C45.4 20.5 45.9 21.7 46.8 22.6C47.7 23.4 48.9 23.9 50.2 23.9C51.2 23.9 52 23.7 52.7 23.2C53.4 22.7 54 22.1 54.4 21.2L58.4 21.9C57.8 23.6 56.8 25 55.3 26C53.8 27 52.1 27.5 50.2 27.5C47.4 27.5 45.1 26.7 43.4 25C41.9 23.2 41 21 41 18.1C41 15.2 41.8 13 43.5 11.3C45.2 9.6 47.4 8.8 50.1 8.8C51.4 8.8 52.5 9 53.5 9.4C54.5 9.8 55.5 10.3 56.2 11C57 11.7 57.6 12.7 58 13.8C58.6 15 58.8 16.3 58.8 17.8ZM50.2 12C48.9 12 47.9 12.3 47.1 13C46.3 13.7 45.7 14.6 45.5 16H54.5C54.4 14.7 53.9 13.7 53.2 13C52.4 12.3 51.4 12 50.2 12ZM61.9 27V0H66.3V27H61.9Z"
                        fill="#ffffff"/>
                </svg>
            </a>
            <div class="header-r">
                <ul class="header-list">
                    <li class="header-list-item">
                        <button id="h-n-b" class="reset-btn" type="button">
                            <i class="icon icon-bells"></i>
                            @if (Auth::user()->unreadNotifications->count() != 0)
                                <span class="counter">{{Auth::user()->unreadNotifications->count()}}</span>
                            @endif
                        </button>
                        <div class="notice-popup">
                            <ul class="notice_list">
                                @forelse(Auth::user()->notifications as $notification)


                                    <li class="notice_item mark-as-read {{$notification->read_at ?? 'new'}}"  data-id="{{$notification->id}}">
                                        <span class="notice_item-link t-r purple3">
                                            {!! $notification->data['message'] !!}
                                        </span>
                                        <span
                                            class="notice_item-hour t-r">{{$notification->created_at->diffForHumans()}}</span>
                                    </li>
                                @empty
                                    <li class="t-r f16-l24 purple3">Notification</li>
                                @endforelse
                            </ul>
                        </div>
                    </li>
                    <li class="header-list-item">
                        <a href="/chatify">
                            <i class="icon icon-mail"></i>
<!--                             <span class="counter">24</span> -->
                        </a>
                    </li>
                </ul>
                <div class="header-user">
                    <div class="user-avatar">
                        <span
                            class="t-sb f18-l25 purple1"> {{ substr(Auth::user()->surname, 0,1)}}{{substr(Auth::user()->name, 0,1)}}</span>
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
                                <a class="icon icon-order" href="{{ route('orders') }}">My Orders</a>
                            </li>
                            <li class="menu-list-item">
                                <a class="icon icon-settings" href="{{route('settings-notification')}}">Settings</a>
                            </li>
                            <li class="menu-list-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    <button type="submit" class="reset-btn icon icon-log-out-white"
                                            value="{{ __('Log out') }}">{{ __('Log out') }}</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--         <div class="notification active"> -->
<!--             <p class="t-r f14-l16 purple1">Your order has been successfully saved and will be published after moderator -->
<!--                 approval</p> -->
<!--             <button class="reset-btn" type="button"> -->
<!--                 <i class="icon icon-close-green"></i> -->
<!--             </button> -->
<!--         </div> -->
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

<script>
    $(document).ready(function () {
        $('.mark-as-read').click(function () {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
            $(this).removeClass('new');
            })
        })
    })
    function sendMarkRequest(id = null) {
        return $.ajax("{{route('markNotification')}}", {
            method: 'POST',
            data: {
                _token: "{{csrf_token()}}",
                id
            }
        });
    }
</script>
</body>

</html>
