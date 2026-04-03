@extends('layouts.guest')
@section('content')

<h2 class="auth-title">Reset Password</h2>
<p class="auth-subtitle">Enter your email address and choose a new password</p>

<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <div class="form-group">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
               placeholder="Enter your email address">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-group">
        <label for="password" class="form-label">New Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password"
               placeholder="Enter your new password">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
        <label for="password_confirmation" class="form-label">Confirm New Password</label>
        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
               name="password_confirmation" required autocomplete="new-password"
               placeholder="Confirm your new password">
        @error('password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="auth-actions">
        <div></div> <!-- Spacer for alignment -->
        <button type="submit" class="site-btn">
            Reset Password
        </button>
    </div>
</form>

@endsection
