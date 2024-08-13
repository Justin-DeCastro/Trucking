<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Rules\AdminLimit; // Ensure this rule is defined and appropriate for role limits if needed

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Ensure the view path is correct
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the form data
        $this->validator($request->all())->validate();

        // Check if the request is for an admin account and enforce the limit
        if ($request->input('role') === 'admin') {
            $adminCount = User::where('role', 'admin')->count();
            if ($adminCount >= 2) {
                return redirect()->back()->withErrors(['role' => 'Cannot create more than 2 admin accounts.']);
            }
        }

        // Create a new user
        $user = $this->create($request->all());

        // Log in the user
        Auth::login($user);

        // Redirect based on the user's role
        if ($user->role === 'admin') {
            return redirect()->intended('login');
        } elseif ($user->role === 'courier') {
            return redirect()->intended('login');
        } elseif ($user->role === 'accounting') {
            return redirect()->intended('login');
        }

        // Fallback or default route if the role is not found
        return redirect()->intended('home'); // Ensure 'home' is a valid route
    }

    // Validate the registration data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:accounting,courier,admin', // Updated validation rule for role
        ]);
    }

    // Create a new user
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'], // Store the role field
        ]);
    }

    public function getUser()
    {
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Check if the user is authenticated
        if ($user) {
            // Return the user's name
            return response()->json(['name' => $user->name]);
        }
    
        // Return an error response if no user is authenticated
        return response()->json(['error' => 'No authenticated user found'], 401);
    }
}
