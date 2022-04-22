<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="/home"><img src="../assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo"><span>Birel</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i
                    class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="../assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Christy
                        Wert</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li @if(Route::is('index')) class="active" @endif><a href="{{route('index')}}"><i class="icon-home"></i><span>Dashboard</span></a>
                </li>
                <li @if(Route::is('users.*')) class="active" @endif>
                    <a href="#users" class="has-arrow"><i class="icon-diamond"></i><span>Users</span></a>
                    <ul>
                        <li><a href="{{ route('users.index') }}">All</a></li>
                        <li><a href="{{ route('users.create') }}">Create user</a></li>
                    </ul>
                </li>
                <li @if(Route::is('companies.*')) class="active" @endif>
                    <a href="#companies" class="has-arrow"><i class="icon-diamond"></i><span>Companies</span></a>
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
                <li @if(Route::is('question.*')) class="active" @endif>
                    <a href="#question" class="has-arrow"><i class="icon-question"></i><span>Question</span></a>
                    <ul>
                        <li><a href="{{ route('question.index') }}">All</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
