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

            // Redirect based on the user's role
            if ($user->isAdmin()) {
                return redirect()->intended('admindash');
            } elseif ($user->isCourier()) {
                return redirect()->intended('courierdash');
            } elseif ($user->isAccounting()) {
                return redirect()->intended('accountingdash');
            }

            // If no matching role is found, redirect to a default route or error page
            // Example: Redirect to a generic page or show an error message
            return redirect()->intended('home'); // Make sure 'home' is a valid route
        }

        // If login fails, redirect back with an error
        throw ValidationException::withMessages([
            'email' => ['The provided credentials do not match our records.'],
        ]);
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
