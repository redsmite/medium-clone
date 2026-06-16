<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function create()
    {
        $categories = Category::get();
        return view("post.create", [
            "categories" => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "images"        => ["required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048"],
            "title"        => "required",
            "content"      => "required",
            "category_id"  => ["required", "exists:category,id"],
            "published_at" => ["nullable", "date"],
        ]);

        $image = $data["images"];
        unset($data["images"]);

        $data["user_id"] = Auth::id();
        $data["slug"]    = Str::slug($data["title"]);

        $imagePath    = $image->store("posts", "public");
        $data["images"] = $imagePath;

        Post::create($data);

        return redirect()->route("dashboard");
    }

    public function show(Post $post) {}

    public function edit(Post $post) {}

    public function update(Request $request, Post $post) {}

    public function destroy(Post $post) {}
}
