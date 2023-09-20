@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1>Create Account</h1>
        <p>Already have an account? <span><a href="/login">Login</a></span></p>

        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif --}}

        <form action="/register" method="POST" class="register-form" >

            @csrf
            <label>Name <span>*</span></label>
            <br>
            <input type="text" name="name" value="{{ old('name') }}" class="register-input" />
            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
            <br>
            <label>Email <span>*</span></label>
            <br>
            <input type="text" required name="email" value="{{ old('email') }}" class="register-input" />
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            <br>
            <label>School <span>*</span></label>
            <br>
            <input type="text" placeholder="e.g; WASS not full name" name="school" value="{{ old('school') }}" class="register-input" />
            <span class="text-danger">@error('school') {{ $message }} @enderror</span>
            <br>
            <label>Nicky <span>*</span></label>
            <br>
            <input type="text" name="nicky" value="{{ old('nicky') }}" class="register-input" />
            <span class="text-danger">@error('nicky') {{ $message }} @enderror</span>
            <br>
            <label>Password <span>*</span></label>
            <br>
            <input type="password" name="password" class="register-input" />
            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            <br>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
