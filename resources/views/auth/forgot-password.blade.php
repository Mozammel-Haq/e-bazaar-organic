@extends('layouts.guest')
@section('content')

<h2 class="auth-title">Forgot Password</h2>
<p class="auth-subtitle">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

<!-- Session Status -->
@if (session('status'))
    <div class="alert alert-info" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div class="form-group">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autofocus
               placeholder="Enter your email address">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="auth-actions">
        <div></div> <!-- Spacer for alignment -->
        <button type="submit" class="site-btn">
            Send Reset Link
        </button>
    </div>
</form>

@endsection
