@extends('layouts.app')

@section('content')

<div class="brand">
    <img src="images/brand.png" alt="Schookbook">

    <p class="inside">Made with Love by Jhoker</p>
</div>

<div class="text">
<h5>WELCOME TO SCHOOLBOOK</h5>

<p>Best place to post your school pics</p>

<div class="button">
    <a href="/register"><button class="btn btn-primary register">Register</button></a>
    <a href="/login"><button class="btn btn-primary login">Login</button></a>
</div>
</div>



@endsection