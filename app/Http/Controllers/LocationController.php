<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Get the current logged-in user's ID
        $userId = auth()->id();

        // Create a new location record
        Location::create([
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'user_id' => $userId, // Set the user_id to the currently logged-in user
        ]);

        // Redirect or respond with success message
        return redirect()->back()->with('success', 'Location created successfully!');
    }
}
