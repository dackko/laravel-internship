<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $blogs = Post::all();
        //compact('posts')  === ['posts' => $posts]

        return view('admin.posts.index', ['posts' => $blogs]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $name = '';
        if($request->has('featured_image')) {
            $name = $request->file('featured_image')->hashName();
            Storage::disk('public')->put("posts/", $request->file('featured_image'));
        }

        $post = new Post();
        $post->title = $request->get('title');
        $post->slug = Str::slug($request->get('title'));
        $post->description = $request->get('description');
        $post->user_id = Auth::user()->id;
        $post->featured_image = $name;

        $created = $post->save();

        if($created === true) {
            return redirect()->route('admin.posts.index');
        }

        return "Neshto ne e vo red";
    }
}
