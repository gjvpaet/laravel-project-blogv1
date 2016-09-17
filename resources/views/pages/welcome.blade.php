@extends('templates.main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to my Blog!</h1>
                    <p class="lead">Thank you so much for visiting. This is my website built with laravel. Please read my lates post!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div>
        <!-- end of header .row -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quibusdam sequi quaerat cupiditate autem. Distinctio, atque reiciendis, saepe incidunt magnam quibusdam ab mollitia, sed qui, perspiciatis fugiat magni laudantium quam...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quibusdam sequi quaerat cupiditate autem. Distinctio, atque reiciendis, saepe incidunt magnam quibusdam ab mollitia, sed qui, perspiciatis fugiat magni laudantium quam...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quibusdam sequi quaerat cupiditate autem. Distinctio, atque reiciendis, saepe incidunt magnam quibusdam ab mollitia, sed qui, perspiciatis fugiat magni laudantium quam...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quibusdam sequi quaerat cupiditate autem. Distinctio, atque reiciendis, saepe incidunt magnam quibusdam ab mollitia, sed qui, perspiciatis fugiat magni laudantium quam...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection