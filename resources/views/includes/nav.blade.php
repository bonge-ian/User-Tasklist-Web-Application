<nav class="top-bar">
    <div class="nav-wrapper grid-x grid-padding-x">
        <div class="top-bar-left">
            <ul class="menu vertical medium-horizontal">
                <li class="menu-text"><a href="{{ route('tasks.index') }}">{{ config('app.name', 'Tasklist') }}</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu vertical medium-horizontal">
                @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
                    <li>
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul class="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endif
            </ul>
        </div>
    </div>
</nav>
