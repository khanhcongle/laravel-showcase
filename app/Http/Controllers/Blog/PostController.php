<?php


namespace App\Http\Controllers\Blog;


use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController
{
    function show(Request $request, Post $post) {
        return Inertia::render('Post', ['post' => $post] );
    }
}
