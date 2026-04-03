<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard') | E-Shop Admin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css">
</head>

<body class="admin-body">
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="admin-sidebar-header">
                <a href="{{ route('home') }}" class="admin-logo">
                    <img src="{{ asset('img/logo-light.png') }}" alt="E-Shop" class="admin-logo-img">
                    {{-- collapsed version --}}
                    <img src="{{ asset('img/logo-small.png') }}" alt="E-Shop" class="admin-logo-img-collapsed">
                </a>
            </div>

            <nav class="admin-sidebar-nav">
                <ul>
                    <li class="admin-nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}" class="admin-nav-link">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="fa fa-th"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="fa fa-users"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="fa fa-bar-chart"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="icon_box-selected"></i>
                            <span>Inventory</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="fa fa-bullhorn"></i>
                            <span>Marketing</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="icon_chat_alt"></i>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="admin-nav-item">
                        <a href="#" class="admin-nav-link">
                            <i class="fa fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="admin-sidebar-footer">
                <form action="{{ route('logout') }}" method="POST" class="admin-logout-form">
                    @csrf
                    <button type="submit" class="admin-nav-link admin-logout-btn">
                        <i class="icon_info_alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <!-- Top Header -->
            <header class="admin-header">
                <div class="admin-header-left">
                    <button class="admin-sidebar-toggle d-none d-lg-block">
                        <i class="fa fa-bars"></i>
                    </button>
                    <button class="admin-mobile-toggle d-lg-none">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="admin-search">
                        <i class="icon_search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                </div>

                <div class="admin-header-right">
                    <div class="admin-header-actions">
                        <a href="#" class="admin-header-action">
                            <i class="fa fa-bell-o"></i>
                            <span class="admin-notification-badge">3</span>
                        </a>
                    </div>

                    <div class="admin-user-menu dropdown">
                        <button class="admin-user-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            <div class="admin-avatar">
                                <img src="{{ asset('img/logo.png') }}" alt="Admin">
                            </div>
                            <span class="admin-username">{{ Auth::user()->name }}</span>
                            <i class="arrow_carrot-down"></i>
                        </button>
                        <div class="dropdown-menu admin-dropdown-menu">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item-form">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="icon_key_alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="admin-content">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Mobile Overlay -->
    <div class="admin-mobile-overlay"></div>

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>

    <script>
        // Sidebar Toggle
        $(document).ready(function() {
            $('.admin-sidebar-toggle, .admin-menu-toggle').on('click', function() {
                $('.admin-sidebar').toggleClass('collapsed');
                $('.admin-main').toggleClass('expanded');
            });

            // Mobile menu toggle
            $('.admin-menu-toggle, .admin-mobile-toggle').on('click', function() {
                $('.admin-sidebar').toggleClass('mobile-open');
                $('.admin-mobile-overlay').toggleClass('active');
            });

            // Close mobile menu on overlay click
            $('.admin-mobile-overlay').on('click', function() {
                $('.admin-sidebar').removeClass('mobile-open');
                $(this).removeClass('active');
            });

            // User dropdown toggle
            $('.admin-user-toggle').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                $('.admin-dropdown-menu').toggle();
            });

            // Close dropdown when clicking outside
            $(document).on('click', function() {
                $('.admin-dropdown-menu').hide();
            });

            // Prevent dropdown from closing when clicking inside
            $('.admin-dropdown-menu').on('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
