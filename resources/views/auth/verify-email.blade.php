@extends('layouts.guest')
@section('content')

<h2 class="auth-title">Verify Email</h2>
<p class="auth-subtitle">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>

@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success" role="alert">
        A new verification link has been sent to the email address you provided during registration.
    </div>
@endif

<div class="auth-actions">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="site-btn">
            Resend Verification Email
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="#" class="auth-links" onclick="event.preventDefault(); this.closest('form').submit();">
            Log Out
        </a>
    </form>
</div>

@endsection
