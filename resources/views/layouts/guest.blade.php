<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Ogani CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: "Cairo", sans-serif;
                background-color: #ffffff;
                color: #1c1c1c;
            }
            .auth-container {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 50px 0;
                background: #f5f5f5;
            }
            .auth-card {
                background: #ffffff;
                border-radius: 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
                border: 1px solid #b3d087;
                border-radius: 6px;
                padding: 40px;
                max-width: 500px;
                width: 100%;
                margin: 0 20px;
            }
            .auth-logo {
                text-align: center;
                margin-bottom: 30px;
            }
            .auth-logo img {
                height: 50px;
            }
            .auth-title {
                font-size: 30px;
                font-weight: 700;
                color: #1c1c1c;
                text-align: center;
                margin-bottom: 20px;
                font-family: "Cairo", sans-serif;
            }
            .auth-subtitle {
                font-size: 16px;
                color: #6f6f6f;
                text-align: center;
                margin-bottom: 30px;
                font-family: "Cairo", sans-serif;
                line-height: 26px;
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-label {
                font-size: 16px;
                font-weight: 600;
                color: #1c1c1c;
                margin-bottom: 8px;
                display: block;
                font-family: "Cairo", sans-serif;
            }
            .form-control {
                border: 1px solid #ebebeb;
                border-radius: 0;
                padding: 12px 15px;
                font-size: 16px;
                font-family: "Cairo", sans-serif;
                color: #1c1c1c;
                background: #ffffff;
                transition: all 0.3s;
            }
            .form-control:focus {
                border-color: #7fad39;
                box-shadow: 0 0 0 0.2rem rgba(127, 173, 57, 0.25);
                outline: none;
            }
            .form-control.is-invalid {
                border-color: #dc3545;
            }
            .invalid-feedback {
                color: #dc3545;
                font-size: 14px;
                margin-top: 5px;
                font-family: "Cairo", sans-serif;
            }
            .form-check {
                margin-bottom: 20px;
            }
            .form-check-input {
                width: 18px;
                height: 18px;
                border: 1px solid #ebebeb;
                border-radius: 0;
                margin-right: 4px;
            }
            .form-check-input:checked {
                background-color: #7fad39;
                border-color: #7fad39;
            }
            .form-check-label {
                font-size: 16px;
                margin-left: 8px !important;
                margin-top: 4px !important;
                color: #6f6f6f;
                font-family: "Cairo", sans-serif;
            }
            .auth-links {
                text-align: center;
                margin-top: 20px;
            }
            .auth-links a {
                color: #7fad39;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                font-family: "Cairo", sans-serif;
                text-transform: uppercase;
                letter-spacing: 1px;
                transition: all 0.3s;
            }
            .auth-links a:hover {
                color: #6a8c33;
                text-decoration: underline;
            }
            .auth-actions {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 30px;
            }
            .auth-actions .site-btn {
                background: #7fad39;
                color: #ffffff;
                border: none;
                padding: 13px 30px 12px;
                font-size: 14px;
                font-weight: 800;
                text-transform: uppercase;
                font-family: "Cairo", sans-serif;
                letter-spacing: 2px;
                cursor: pointer;
                transition: all 0.3s;
            }
            .auth-actions .site-btn:hover {
                background: #6a8c33;
                color: #ffffff;
            }
            .alert {
                border-radius: 0;
                border: none;
                padding: 15px 20px;
                margin-bottom: 20px;
                font-family: "Cairo", sans-serif;
            }
            .alert-info {
                background: #d1ecf1;
                color: #0c5460;
                border-left: 4px solid #17a2b8;
            }
            .alert-success {
                background: #d4edda;
                color: #155724;
                border-left: 4px solid #28a745;
            }
        </style>
    </head>
    <body>
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-logo">
                    <a href="{{ url('/') }}">
                        <h2 style="color: #7fad39; font-weight: 700; font-family: 'Cairo', sans-serif;">OGANI</h2>
                    </a>
                </div>

                @yield('content')
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
