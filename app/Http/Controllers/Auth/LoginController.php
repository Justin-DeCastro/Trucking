<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if the user is verified
            if ($user->is_verified) {
                // Redirect based on the user's role
                if ($user->isAdmin()) {
                    return redirect()->intended('admindash');
                } elseif ($user->isCourier()) {
                    return redirect()->intended('courierdash');
                } elseif ($user->isAccounting()) {
                    return redirect()->intended('accountingdash');
                }

                // Redirect to a default route if no specific role is found
                return redirect()->intended('home');
            } else {
                // Logout the user if not verified
                Auth::logout();
                return redirect()->route('verification.form')->with('error', 'You need to verify your email before logging in.');
            }
        }

        // If login fails, redirect back with an error
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }


    // Log out the user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
