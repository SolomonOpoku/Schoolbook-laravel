@extends('layouts.app')

@section('content')

<div class="loginContainer wrapper">
    <h1>Login to your account</h1>
    <p>Don't have an account? <span><a href="/register">Register</a></span></p>

    <form action="{{ url('/login') }}" method="POST">
    @if (Session::has('success'))
           <p>{{ Session::get('success') }}</p>
        @endif
            @if (Session::has('fail'))
          <p> {{ Session::get('fail') }}</p>
        @endif
    @csrf
        <label>Email</label>
        <br>
        <input type="text" name="email" value="{{ old('email') }}">
        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        <br>
        <label>Password</label>
        <br>
        <input type="password" name="password">
        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        {{-- <div>
        <label for="checkbox">
            <input type="checkbox" id="remember" name="remember"> Remember Me
            </label>
        </div> --}}
        
        <button class="btn btn-primary">Login</button>
    </form>
</div>

@endsection