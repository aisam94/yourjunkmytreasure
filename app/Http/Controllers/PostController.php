<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        $categories = Category::all();
        $sellers = User::all();

        if (request('search')) {
            $posts
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhereHas('user', function ($q) {
                    $q->where('name', 'like', '%' . request('search') . '%');
                });
        }
        return view('posts.posts', ['posts' => $posts->filter(request(['search']))->get(), 'categories' => $categories, 'sellers' => $sellers]);
    }

    // view with post in argument
    public function show(Post $post)
    {
        return view('posts.post', ['post' => $post]);
    }

    // view to create post
    public function create()
    {
        return view('posts.create');
    }

    // view to manage post
    public function manage(User $author)
    {
        return view('posts.manage', [
            'posts' => $author->posts
        ]);
    }

    // view to edit post
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    // create new post
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'description' => 'required',
            'price' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // image handling
        $image = $attributes['image'];
        $destinationPath = public_path('/images');
        $path = $image->store($destinationPath); // give unique name and store it
        $image->move($destinationPath, $path); // move image to image folder
        $attributes['image'] = basename($path);//save the image path in database

        $attributes['user_id'] = auth()->id();
        Post::create($attributes);
        return redirect('/');
    }

    // update post
    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'description' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $post->update($attributes);
        return back()->with('success', 'Post updated');
    }

    // delete post
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post deleted');
    }
}
