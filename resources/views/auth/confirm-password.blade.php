@extends('layouts.guest')
@section('content')

<h2 class="auth-title">Confirm Password</h2>
<p class="auth-subtitle">This is a secure area of the application. Please confirm your password before continuing.</p>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

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

    <div class="auth-actions">
        <div></div> <!-- Spacer for alignment -->
        <button type="submit" class="site-btn">
            Confirm
        </button>
    </div>
</form>

@endsection
