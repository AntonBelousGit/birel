<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="/home"><svg width="67" height="28" viewBox="0 0 67 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5 13.7C16.7 14.6 18.3 16.6 18.3 20C18.3 22.1 17.6 23.8 16.3 25.1C15 26.4 13.1 27 10.7 27H0.5V1.8H8.5C11 1.8 13 2.4 14.4 3.6C15.8 4.8 16.5 6.5 16.5 8.6C16.5 9.8 16.2 10.8 15.7 11.7C15.2 12.6 14.5 13.3 13.5 13.7ZM8.5 5.7H4.9V12.4H8.9C10 12.4 10.8 12.1 11.4 11.5C12 10.9 12.3 10 12.3 9C12.3 8 12 7.2 11.3 6.6C10.6 6 9.7 5.7 8.5 5.7ZM9.8 23.1C11.1 23.1 12.2 22.8 12.8 22.1C13.5 21.4 13.8 20.6 13.8 19.6C13.8 18.6 13.4 17.7 12.7 17C12 16.3 11 16 9.6 16H4.9V23.2H9.8V23.1ZM23.9 6C23.2 6 22.6 5.7 22 5.2C21.5 4.7 21.2 4.1 21.2 3.4C21.2 2.7 21.5 2.1 22 1.6C22.5 1.1 23.1 0.8 23.9 0.8C24.6 0.8 25.2 1.1 25.7 1.6C26.2 2.1 26.5 2.7 26.5 3.4C26.5 4.1 26.2 4.7 25.7 5.2C25.2 5.8 24.6 6 23.9 6ZM21.6 27V9.2H26V27H21.6ZM34.7 12.1C35.2 11.2 35.9 10.5 37 9.9C38.1 9.3 39.2 9 40.5 9V13C38.6 13 37.2 13.4 36.3 14.2C35.4 15 34.9 16.3 34.9 18.1V27H30.5V9.2H34.7V12.1ZM58.8 17.8L58.7 18.9H45.3C45.4 20.5 45.9 21.7 46.8 22.6C47.7 23.4 48.9 23.9 50.2 23.9C51.2 23.9 52 23.7 52.7 23.2C53.4 22.7 54 22.1 54.4 21.2L58.4 21.9C57.8 23.6 56.8 25 55.3 26C53.8 27 52.1 27.5 50.2 27.5C47.4 27.5 45.1 26.7 43.4 25C41.9 23.2 41 21 41 18.1C41 15.2 41.8 13 43.5 11.3C45.2 9.6 47.4 8.8 50.1 8.8C51.4 8.8 52.5 9 53.5 9.4C54.5 9.8 55.5 10.3 56.2 11C57 11.7 57.6 12.7 58 13.8C58.6 15 58.8 16.3 58.8 17.8ZM50.2 12C48.9 12 47.9 12.3 47.1 13C46.3 13.7 45.7 14.6 45.5 16H54.5C54.4 14.7 53.9 13.7 53.2 13C52.4 12.3 51.4 12 50.2 12ZM61.9 27V0H66.3V27H61.9Z" fill="#573CDA"></path>
                                            </svg></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i
                class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
        <style>
        .user_div {
            font-family: WorkSans-Medium,sans-serif;
            font-weight: 500;
            font-size: 25px;
            color: #573cda;
            text-transform: capitalize;
        }
        </style>
            <div class="user_div">
                Admin
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li @if(Route::is('index')) class="active" @endif><a href="{{route('index')}}"><i class="icon-home"></i><span>Dashboard</span></a>
                </li>
                <li @if(Route::is('users.*')) class="active" @endif>
                    <a href="#users" class="has-arrow"><i class="icon-users"></i><span>Users</span></a>
                    <ul>
                        <li><a href="{{ route('users.index') }}">All</a></li>
                        <li><a href="{{ route('users.create') }}">Create user</a></li>
                    </ul>
                </li>
                <li @if(Route::is('companies.*')) class="active" @endif>
                    <a href="#companies" class="has-arrow"><i class="icon-grid"></i><span>Companies</span></a>
                    <ul>
                        <li><a href="{{ route('company.index') }}">All</a></li>
                        <li><a href="{{ route('company.create') }}">Create company</a></li>
                    </ul>
                </li>
                <li @if(Route::is('category.*')) class="active" @endif>
                    <a href="#category" class="has-arrow"><i class="icon-diamond"></i><span>Categories</span></a>
                    <ul>
                        <li><a href="{{ route('category.index') }}">All</a></li>
                        <li><a href="{{ route('category.create') }}">Create category</a></li>
                    </ul>
                </li>
                <li @if(Route::is('admin-orders.*')) class="active" @endif>
                    <a href="#category" class="has-arrow"><i class="icon-doc"></i><span>Orders</span></a>
                    <ul>
                        <li><a href="{{ route('admin-orders') }}">All</a></li>
                        <li><a href="{{ route('admin-orders',['type'=>'ASK']) }}">ASK</a></li>
                        <li><a href="{{ route('admin-orders',['type'=>'BID']) }}">BID</a></li>
                        <li><a href="{{ route('admin-orders',['type'=>'LFO']) }}">LFO</a></li>
                    </ul>
                </li>
                <li @if(Route::is('notification')) class="active" @endif>
                    <a href="#notification" class="has-arrow"><i class="icon-envelope"></i><span>Notification</span></a>
                    <ul>
                        <li><a href="{{ route('notification') }}">Create</a></li>
                    </ul>
                </li>
                <li @if(Route::is('question')) class="active" @endif>
                    <a href="#question" class="has-arrow"><i class="icon-question"></i><span>Question</span></a>
                    <ul>
                        <li><a href="{{ route('question.index') }}">All</a></li>
                    </ul>
                </li>
                <li @if(Route::is('settings')) class="active" @endif>
                    <a href="#settings" class="has-arrow"><i class="icon-settings"></i><span>Settings</span></a>
                    <ul>
                        <li><a href="{{ route('settings') }}">All</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
