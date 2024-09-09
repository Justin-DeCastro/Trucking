<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Rules\StrongPassword;

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
        return view('Admin.AddDriver', compact('driver_license')); // Ensure the view path is correct
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the form data
        $this->validator($request->all())->validate();

        // Check if the request is for an admin account and enforce the limit
        if ($request->input('role') === 'admin') {
            $adminCount = User::where('role', 'admin')->count();
            if ($adminCount >= 3) {
                return redirect()->back()->withErrors(['role' => 'Cannot create more than 3 admin accounts.']);
            }
        }

        // Handle the file upload for driver's license if present
        $driverLicensePath = null;
        if ($request->hasFile('driver_license')) {
            $file = $request->file('driver_license');
            $driverLicensePath = 'driver_licenses/' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('driver_licenses'), $driverLicensePath);
        }

        // Handle the file upload for driver image if present
        $driverImagePath = null;
        if ($request->hasFile('driver_image')) {
            $image = $request->file('driver_image');
            $driverImagePath = 'driver_images/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('driver_images'), $driverImagePath);
        }

        // Create a new user
        $verificationCode = 'GDR-' . Str::random(6);

        $user = $this->create($request->all(), $driverLicensePath, $driverImagePath, $verificationCode);
        Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

        // Log in the user
        Auth::login($user);

        // Redirect based on the user's role
        if ($user->isAdmin()) {
            return redirect()->route('admindash')->with('swal', [
                'title' => 'Registration Successful',
                'text' => 'In order to continue registration, we have sent a verification code to your email. Please verify your email first.',
                'icon' => 'success'
            ]);
        } elseif ($user->isCoordinator()) {
            return redirect()->route('coordinatordash')->with('swal', [
                'title' => 'Registration Successful',
                'text' => 'In order to continue registration, we have sent a verification code to your email. Please verify your email first.',
                'icon' => 'success'
            ]);
        } elseif ($user->isCourier()) {
            return redirect()->route('courierdash')->with('swal', [
                'title' => 'Registration Successful',
                'text' => 'In order to continue registration, we have sent a verification code to your email. Please verify your email first.',
                'icon' => 'success'
            ]);
        } elseif ($user->isAccounting()) {
            return redirect()->route('accountingdash')->with('swal', [
                'title' => 'Registration Successful',
                'text' => 'In order to continue registration, we have sent a verification code to your email. Please verify your email first.',
                'icon' => 'success'
            ]);
        }

        // Default redirect
        return redirect()->route('home')->with('swal', [
            'title' => 'Registration Successful',
            'text' => 'In order to continue registration, we have sent a verification code to your email. Please verify your email first.',
            'icon' => 'success'
        ]);
    }

    // Validate the registration data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                new StrongPassword($data['name'], $data['email']),
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*?&]/',
            ],
            'role' => 'required|string|in:accounting,courier,admin,coordinator',
            'driver_license' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'driver_image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'license_number' => 'nullable|string|max:255',
            'license_expiration' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:11',
            'address' => 'nullable|string|max:255',
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);
    }

    // Create a new user
    protected function create(array $data, $driverLicensePath = null, $driverImagePath = null, $verificationCode = null)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'driver_license' => $driverLicensePath,
            'driver_image' => $driverImagePath,
            'license_number' => $data['license_number'] ?? null,
            'license_expiration' => $data['license_expiration'] ?? null,
            'contact_number' => $data['contact_number'] ?? null,
            'address' => $data['address'] ?? null,
            'verification_code' => $verificationCode,
            'is_verified' => false,
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
