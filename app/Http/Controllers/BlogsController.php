<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Post;

class BlogsController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug)
    {
        // fetch from the database based on slug
        $post = Post::where('slug', '=', $slug)->first();

        // return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
