@extends('layouts.registerLayout')


@section('content')
<nav class="navContainer">
    <a href="/"><img id="logo" src="images/logo.png" alt="logo"></a>

    <div class="navlinks">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="/post">Post</a></li>
            <li><a href="">Settings</a></li>
        </ul>
        <span class="btn btn-danger logout-span"><a href="">Logout</a></span>
    </div>

</nav>

<div class="indexContainer">
    <div class="top-bar">
    <h1>SCHOOLBOOK</h1>
        <img src="images/profile.jpg" alt="profile-image">
        <a href="">Profile</a>
    </div>

    <div class="body">
        <img src="images/banner.jpg" alt="">
        <p>I am here!!! Bankai!!!</p>
    </div>
</div>


@endsection