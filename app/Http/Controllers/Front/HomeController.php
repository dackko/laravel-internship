<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('front.home', compact('posts'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('front.single-post', compact('post'));
    }
}
