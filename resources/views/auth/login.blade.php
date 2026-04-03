@extends('layouts.guest')

@section('content')

<h2 class="auth-title">Login</h2>
<p class="auth-subtitle">Sign in to your account to continue</p>

<!-- Session Status -->
@if (session('status'))
    <div class="alert alert-info" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div class="form-group">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
               placeholder="Enter your email address">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="current-password"
               placeholder="Enter your password">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Remember Me & Forgot Password -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 10px;">
        <div class="form-check" style="margin: 0; display: flex; align-items: center;">
            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
            <label class="form-check-label" for="remember_me">
                Remember me
            </label>
        </div>

        @if (Route::has('password.request'))
            <div class="auth-links" style="margin: 0; text-align: right;">
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            </div>
        @endif
    </div>

    <!-- Submit Button -->
    <div class="auth-actions" style="flex-direction: column; gap: 15px;">
        <button type="submit" class="site-btn" style="width: 100%;">
            Login
        </button>
    </div>

    <!-- Register Link -->
    <div style="text-align: center; margin-top: 25px; font-size: 14px; color: #6f6f6f; font-family: 'Cairo', sans-serif;">
        Don't have an account?
        <a href="{{ route('register') }}" style="color: #7fad39; font-weight: 700; text-decoration: none; text-transform: uppercase; letter-spacing: 1px;">
            Sign Up
        </a>
    </div>
</form>

@endsection
