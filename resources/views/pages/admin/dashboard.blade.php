@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="admin-page-header">
    <h1 class="admin-page-title">Dashboard</h1>
    <p class="admin-page-subtitle">Welcome back <span class="admin-page-subtitle-name">{{ $user->name }}</span> ! Here's what's happening with your store today.</p>
</div>
@endsection
