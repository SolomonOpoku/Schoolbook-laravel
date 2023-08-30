@extends('layouts.registerLayout')

@section('content')

<div class="wrapper">
<h1>Create Account</h1>
<p>Already have an account? <span><a href="/login">Login</a></span></p>


<form action="" method="POST">

    <label>Name <span>*</span></label>
    <br>
    <input type="text" name="name"/>
    <br>
    <label>Email <span>*</span></label>
    <br>
    <input type="email" required name="email"/>
    <br>
    <label>School <span>*</span></label>
    <br>
    <input type="text" placeholder="e.g; WASS not full name" name="school"/>
    <br>
    <label>Nicky <span>*</span></label>
    <br>
    <input type="text" name="nicky"/>
    <br>
    <label>Password <span>*</span></label>
    <br>
    <input type="password" name="password"/>
 <br>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
@endsection