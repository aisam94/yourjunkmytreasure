<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    // go to register page
    public function create()
    {
        return view('register.create');
    }

    // take input from register page and register user
    public function store()
    {
        // take input from registering user
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:4|max:255',
        ]);

        // encrypt the password input
        $attributes['password'] = bcrypt($attributes['password']);

        // create user
        $user = User::create($attributes);

        // login user
        auth()->login($user);

        // redirect
        return redirect('/')->with('success', 'Your account has been successfully created.');
    }
}
