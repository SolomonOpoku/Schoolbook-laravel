@extends('layouts.app')

@section('content')
    @include('layouts.pagesLayouts.sideNav')
    @include('layouts.pagesLayouts.navbar')

<div class="body">

<div class="settings-container">
<h6>Change Password</h6>
<form>
<label>Old Password <span>*</span></label>
            <br>
            <input type="text" name="password" class="register-input" />
            {{-- <span class="text-danger">@error('name') {{ $message }} @enderror</span> --}}
 <br>
            <label>New Password <span>*</span></label>
            <br>
            <input type="text" name="password" class="register-input" />
<br>
            <button class="btn btn-primary">Save</button>
 </form>
</div>
</div>

@endsection