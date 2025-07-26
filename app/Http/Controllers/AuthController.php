<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function process(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/')->with('status', 'Logged in successfully!');
        }

        return back()->withInput()->withstatus('Login failed. Please check your credentials and try again.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('status', 'Logged out successfully!');
    }
}
