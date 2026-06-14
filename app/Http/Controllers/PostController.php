<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->simplePaginate(5);
        $categories = Category::get();

        return view("post.index", [
            "posts" => $posts,
            "categories" => $categories,
        ]);
    }

    public function create() {}

    public function store(Request $request) {}

    public function show(Post $post) {}

    public function edit(Post $post) {}

    public function update(Request $request, Post $post) {}

    public function destroy(Post $post) {}
}
