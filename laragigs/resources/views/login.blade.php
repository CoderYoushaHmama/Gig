@extends('layouts/login_register_layout')
@section('content')

<section class="login-section">
    <h1 class="title">LOGIN</h1>
    <div class="subtitle">Log into your account to post gigs</div>
    <form action="{{route('signin')}}" method="POST">
        @csrf
        <div>Email</div>
        @if(Session::has('error'))
            <div class="error">{{Session::get('error')}}</div>
        @endif
        @error('email')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="email" name="email">
        <div>Password</div>
        @error('password')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="password" name="password">
        <button type="submit">Sign In</button>
    </form>
    <div class="register-btn">
        Don't have an account? <a href="{{route('register')}}">Register</a>
    </div>
</section>

@endsection

@section('title')

Login

@endsection
