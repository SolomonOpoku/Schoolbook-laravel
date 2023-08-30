@extends('layouts.registerLayout')

@section('content')

<div class="loginContainer">
    <h1>Login to your account</h1>
    <p>Don't have an account? <span><a href="/register">Register</a></span></p>

    <form action="" method="POST">
        <label>Email</label>
        <br>
        <input type="email">
        <br>
        <label>Password</label>
        <br>
        <input type="password">
        
        <button class="btn btn-primary">Login</button>
    </form>
</div>

@endsection