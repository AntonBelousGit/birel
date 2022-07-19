<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-left"></div>
        <div class="navbar-right">
            <div id="navbar-menu">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <ul class="nav navbar-nav">
                        <li>
                            <button type="submit" style="border: none;outline: none;background-color: transparent;padding: 0;"  class="icon-menu"><i class="icon-power"></i></button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</nav>
