@extends('layouts.app')

@section('content')
    @include('layouts.pagesLayouts.sideNav')
    @include('layouts.pagesLayouts.navbar')

   <div class="body">
   <div class="profile-container">
   <img src="images/profile.jpg" alt="profile-image">

<h3>YEBOAH SOLOMON OPOKU</h3>
<h4>JHOKER</h4>
<h4>SCHOOL</h4>
<h4>jhokerdev@gmail.com</h4>
    

    <a href="/edit-profile"><button class="btn btn-primary">Edit Profile</button></a>
   </div>
</div>

@endsection