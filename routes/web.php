<?php

use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front page
Route::get('/', [PostController::class, 'index']);

// Single post page
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Page by category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts.posts', ['posts' => $category->posts, 'categories' => Category::all(), 'sellers' => User::all()]);
});

// Page by author
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts.posts', ['posts' => $author->posts, 'categories' => Category::all(), 'sellers' => User::all()]);
});

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest'); // register page
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest'); // create new user

// Login/Logout
Route::get('/login', [SessionController::class, 'create'])->middleware('guest'); // login page
Route::post('/login', [SessionController::class, 'store'])->middleware('guest'); // login user
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth'); // logout user

// Posts
Route::get('/create', [PostController::class, 'create'])->middleware('auth'); // create new post page
Route::post('/create', [PostController::class, 'store'])->middleware('auth'); // create new post
Route::get('/manage/{author:username}', [PostController::class, 'manage'])->middleware('auth'); // manage post page
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth'); // edit post page
Route::patch('/posts/{post}', [PostController::class, 'update'])->middleware('auth'); // update post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth'); // delete post