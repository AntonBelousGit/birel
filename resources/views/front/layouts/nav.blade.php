<div class="sidebar-tou">
    <div class="sidebar-tou-wrapper">
        <h2 class="t-m f24-l32 purple2">Legal</h2>
        <nav class="sidebar-tou-nav">
            <ul class="sidebar-tou-list">
                <li class="sidebar-tou-item {{ Route::is('terms-of-use') ? 'active' : '' }}">
                    <a class="sidebar-tou-link t-m f18-l32 purple2" href="{{ route('terms-of-use') }}">
                        Terms of Use
                    </a>
                </li>
                <li class="sidebar-tou-item {{ Route::is('privacy-policy') ? 'active' : '' }}">
                    <a class="sidebar-tou-link t-m f18-l32 purple2" href="{{ route('privacy-policy') }}">
                        Privacy Policy
                    </a>
                </li>
                <li class="sidebar-tou-item {{ Route::is('disclaimer') ? 'active' : '' }}">
                    <a class="sidebar-tou-link t-m f18-l32 purple2" href="{{ route('disclaimer') }}">
                        Further Disclaimer
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
