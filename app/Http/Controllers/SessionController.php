<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        // logout then redirect to frontpage
        auth()->logout();
        return redirect('/')->with('success', 'Bye bye !');
    }


    public function store()
    {
        // validate user request
        $attribute = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // authenticate and login user from credentials given
        if (auth()->attempt($attribute)) {
            return redirect('/')->with('success', 'Welcome !');
        }

        throw ValidationException::withMessages([
            'email' => 'Credentials cannot be verified'
        ]);
    }
}
