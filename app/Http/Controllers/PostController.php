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

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('posts', ['posts' => $posts->filter(request(['search']))->get(), 'categories' => $categories]);
    }

    // view with post in argument
    public function show(Post $post)
    {
        return view('post', ['post' => $post]);
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
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

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
            'excerpt' => 'required',
            'body' => 'required',
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
