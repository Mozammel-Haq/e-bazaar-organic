<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}" style="color: #7fad39; font-weight: 700; font-family: 'Cairo', sans-serif; font-size: 24px;">
            OGANI
        </a>

        <!-- Mobile toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                       href="{{ route('dashboard') }}"
                       style="color: {{ request()->routeIs('dashboard') ? '#7fad39' : '#252525' }}; font-weight: 700; font-family: 'Cairo', sans-serif; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">
                        {{ __('Dashboard') }}
                    </a>
                </li>
            </ul>

            <!-- User Dropdown -->
            @auth
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: #252525; font-family: 'Cairo', sans-serif; font-size: 14px; font-weight: 600; border: 1px solid #ebebeb; background: #ffffff; padding: 8px 16px;">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown" style="border: none; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item" style="color: #1c1c1c; font-family: 'Cairo', sans-serif; font-size: 14px; padding: 10px 20px;"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>
