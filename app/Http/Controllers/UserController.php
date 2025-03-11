<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
        return view(
            "auth.index"
        );
    }

    //Login user
    public function authenticate(Request $request)
    {
        $FormFields = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (auth()->attempt($FormFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }

    //login user
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been Logged out');
    }
    //
}