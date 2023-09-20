@extends('layouts.app')

@section('content')
    @include('layouts.pagesLayouts.sideNav')
    @include('layouts.pagesLayouts.navbar')

<div class="body">

<div class="edit-profile-container">
<form>
@csrf
<div class="form-group edit-label">
                <label>Profile Pic</label>
                <br>
                <input type="file" class="edit-file">
                </div>

            <label>Name</label>
            <br>
            <input type="text" name="name" value="{{ old('name') }}" class="edit-input" />
            {{-- <span class="text-danger">@error('name') {{ $message }} @enderror</span> --}}
            <br>
            <label>Email</label>
            <br>
            <input type="text" name="email" value="{{ old('email') }}" class="edit-input" />
            {{-- <span class="text-danger">@error('email') {{ $message }} @enderror</span> --}}
            <br>
            <label>School</label>
            <br>
            <input type="text" placeholder="e.g; WASS not full name" name="school" value="{{ old('school') }}" class="edit-input" />
            {{-- <span class="text-danger">@error('school') {{ $message }} @enderror</span> --}}
            <br>
            <label>Nicky</label>
            <br>
            <input type="text" name="nicky" value="{{ old('nicky') }}" class="edit-input" />
            {{-- <span class="text-danger">@error('nicky') {{ $message }} @enderror</span> --}}
            <br>
            <button type="submit" class="btn btn-primary">Update Profile</button>
</form>
</div>

</div>

@endsection