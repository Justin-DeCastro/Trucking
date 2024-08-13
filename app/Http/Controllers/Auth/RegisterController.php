<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Ensure the view path is correct
    }
    public function driver_index()
    {
        $driver_license = User::all(); 
        return view('Admin.AddDriver',compact('driver_license')); // Ensure the view path is correct
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

        // Handle the file upload for driver's license if present
        $driverLicensePath = null;
        if ($request->hasFile('driver_license')) {
            $file = $request->file('driver_license');
            $driverLicensePath = 'driver_licenses/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('driver_licenses'), $driverLicensePath);
        }

        // Create a new user
        $user = $this->create($request->all(), $driverLicensePath);

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
            'role' => 'required|string|in:accounting,courier,admin',
            'driver_license' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'license_number' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:20', // New field
            'address' => 'nullable|string|max:255', // New field
        ]);
    }

    // Create a new user
    protected function create(array $data, $driverLicensePath = null)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'driver_license' => $driverLicensePath, // Store the file path for the driver's license
            'license_number' => $data['license_number'] ?? null, // Store the license number
            'contact_number' => $data['contact_number'] ?? null, // Store the contact number
            'address' => $data['address'] ?? null, // Store the address
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
