@extends('templates.main')

@section('title', '| Create New Post')
    
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form action="{{ route('posts.store') }}" method="POST">
                <div class="form-group">
                    <label for="title" name="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body" name="body">Post Body:</label>
                    <textarea id="body" name="body" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block" style="margin-top: 20px;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection