@extends('layouts.app')

@section('content')
    @include('layouts.pagesLayouts.sideNav')
    @include('layouts.pagesLayouts.navbar')
    <div class="body">
        <div class="post-container">
            <div class="form-group">
                <form action="" method="POST" class="post-form">
                <div class="form-group">
                <label class="file-label">Image</label>
                <br>
                <input type="file" class="file">
                </div>
<br>
                <div class="form-group">
                <label class="textarea-label">Type your heart out...</label>
                <br>
                <textarea></textarea>
                </div>
                
                <button class="btn btn-primary post-btn" type="submit" >Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
