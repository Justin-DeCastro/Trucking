<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    // app/Http/Controllers/DriverController.php
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|unique:drivers,email',
            'license_number' => 'required|string|max:255',
            'plate_number' => 'required|string|max:255',
        ]);
    
        // Create a new driver record with validated data
        Driver::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'license_number' => $request->license_number,
            'plate_number' => $request->plate_number,
          
        ]);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Driver added successfully.');
    }
}    
