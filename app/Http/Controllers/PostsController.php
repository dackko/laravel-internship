<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::where('active', true)->get();

        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $name = '';
        if($request->has('featured_image')) {
            $name = $request->file('featured_image')->hashName();
            Storage::disk('public')->put("posts/", $request->file('featured_image'));
        }

        $post = new Post();
        $post->category_id = $request->get('category_id');
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

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::where('active', true)->get();

        return view('admin.posts.edit', compact('categories', 'post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->category_id = $request->get('category_id');
        $post->title = $request->get('title');
        $post->slug = Str::slug($request->get('title'));
        $post->description = $request->get('description');
        $post->user_id = Auth::user()->id;

        if($request->has('featured_image')) {
            $name = $request->file('featured_image')->hashName();
            Storage::disk('public')->put("posts/", $request->file('featured_image'));
            $post->featured_image = $name;
        }

        $updated = $post->save();

        if($updated) {
            return redirect()->route('admin.posts.index');
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $deleted = $post->delete();

        if($deleted) {
            return redirect()->route('admin.posts.index');
        }

        return "error";
    }
}
