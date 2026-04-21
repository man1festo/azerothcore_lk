<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('pages.home');
    }

    public function registerPage()
    {
        return view('pages.register');
    }

    public function statisticsPage()
    {
        return view('pages.statistics');
    }

    public function profilePage()
    {
        return view('pages.profile');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|min:3|max:20|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // TODO: Create user with validated data
        // User::create($validated);

        return redirect()->route('home')->with('success', 'Account created successfully!');
    }
}

