@extends('layouts.login_register_layout')
@section('content')

<section class="register-section">
    <h1 class="title">REGISTER</h1>
    <div class="subtitle">Create an account to post gigs</div>
    <form action="{{route('signup')}}" method="POST">
        @csrf
        <div>Name</div>
        @error('name')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="name" name="name" value="{{old('name')}}">
        <div>Email</div>
        @error('email')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="Email" name="email" value="{{old('email')}}">
        <div>Password</div>
        @error('password')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="password" name="password">
        <div>Confirm Password</div>
        @error('confirm_password')
        <div class="error">{{$message}}</div>
        @enderror
        @if(Session::has('password_error'))
            <div class="error">{{Session::get('password_error')}}</div>
        @endif
        <input type="password" name="confirm_password">
        <button type="submit">Sign Up</button>
    </form>
</section>

@endsection
@section('title')

Register

@endsection
