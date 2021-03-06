<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('guests.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('guests.posts.show', compact('post'));
    }

}