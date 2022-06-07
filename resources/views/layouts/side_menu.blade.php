<aside class="sidebar drop-down">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a class="nav-link {{ Route::is('companies.index') ? 'active' : '' }}" href="{{ route('companies.index') }}">
                <i class="icon icon-case-purple"></i>
                <i class="icon icon-case-green"></i>
                <i class="icon icon-case-white"></i>
                <span class="t-r f18-l32 purple1">Companies</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a class="nav-link {{ Route::is('orders') ? 'active' : '' }}"  href="{{ route('orders') }}">
                <i class="icon icon-stack-purple"></i>
                <i class="icon icon-stack-green"></i>
                <i class="icon icon-stack-white"></i>
                <span class="t-r f18-l32 purple1">My orders</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a class="nav-link {{ Route::is('order') ? 'active' : '' }}" href="{{ route('order') }}">
                <i class="icon icon-stack-plus-purple"></i>
                <i class="icon icon-stack-plus-green"></i>
                <i class="icon icon-stack-plus-white"></i>
                <span class="t-r f18-l32 purple1">Add order</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a class="nav-link {{ Route::is('companies.create') ? 'active' : '' }}" href="{{ route('companies.create')}}">
                <i class="icon icon-case-plus-purple"></i>
                <i class="icon icon-case-plus-green"></i>
                <i class="icon icon-case-plus-white"></i>
                <span class="t-r f18-l32 purple1">Add company</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home')}}">
                <i class="icon icon-user-purple"></i>
                <i class="icon icon-user-green"></i>
                <i class="icon icon-user-white"></i>
                <span class="t-r f18-l32 purple1">Profile</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-btn grey">
        <button id="message-manager-1" class="reset-btn">
            <i class="icon icon-massage-text-purple"></i>
            <i class="icon icon-massage-text-white"></i>
            <span class="t-r f18-l25">
				Suggestions for the platform
			</span>
        </button>
    </div>
    <div class="sidebar-btn">
        <button id="message-manager-2" class="reset-btn">
            <i class="icon icon-massage-question-white"></i>
            <span class="t-r f18-l25">
				Ask a question
			</span>
        </button>
    </div>
    <ul class="sidebar-list">
        <li class="sidebar-list-item">
            <a class="item-link t-r f18-l32 white" href="{{ route('terms-of-use') }}">
                Terms of Use
            </a>
        </li>
        <li class="sidebar-list-item">
            <a class="item-link t-r f18-l32 white" href="{{ route('privacy-policy') }}">
                Privacy Policy
            </a>
        </li>
        <li class="sidebar-list-item">
            <a class="item-link t-r f18-l32 white" href="#">
                Further Disclosures
            </a>
        </li>
    </ul>
</aside>
