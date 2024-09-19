<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Booking;

class TripController extends Controller
{
    public function index()
    {
        // Fetch unique plate numbers
        $plateNumbers = Booking::pluck('plate_number')->unique();

        // Fetch all trips
        $trips = Trip::all();

        return view('Admin.POD_returned', compact('trips', 'plateNumbers'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'arrival_proof' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'trip_completion' => 'required|string',
            'tag' => 'required|string',
            'close_trip' => 'required|string',
            'plate_number' => 'required|string', // Ensure this is validated
        ]);

        // Find the trip by ID
        $trip = Trip::findOrFail($id);

        // Update the trip details
        if ($request->hasFile('arrival_proof')) {
            // Delete old image if exists
            if ($trip->arrival_proof && file_exists(public_path('storage/' . $trip->arrival_proof))) {
                unlink(public_path('storage/' . $trip->arrival_proof));
            }

            // Store new image
            $imagePath = $request->file('arrival_proof')->store('arrival_proofs', 'public');
            $trip->arrival_proof = $imagePath;
        }

        $trip->trip_completion = $request->input('trip_completion');
        $trip->tag = $request->input('tag');
        $trip->close_trip = $request->input('close_trip');
        $trip->plate_number = $request->input('plate_number'); // Update plate_number

        // Save changes
        $trip->save();

        // Redirect or respond with success message
        return redirect()->back()->with('success', 'Trip updated successfully.');
    }
// TripController.php
public function closeTrip(Request $request, $id)
{
    $trip = Trip::find($id);

    if ($trip) {
        $trip->status = 'Closed';
        $trip->save();

        return redirect()->back()->with('success', 'Trip closed successfully');
    }

    return redirect()->back()->with('error', 'Error closing trip');
}

public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'arrival_proof.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'proof_of_delivery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'trip_completion' => 'required|in:Returned Successfully,Pending',
        'plate_number' => 'required|string',
    ]);

    // Initialize arrays for file names
    $arrivalProofFileNames = [];
    $proofOfDeliveryFileNames = [];

    // Handle the arrival proof files upload
    if ($request->hasFile('arrival_proof')) {
        foreach ($request->file('arrival_proof') as $file) {
            $fileName = time() . '_arrival_' . uniqid() . '.' . $file->extension();
            $file->move(public_path('arrival_proofs'), $fileName);
            $arrivalProofFileNames[] = $fileName;
        }
    }

    // Handle the proof of delivery files upload
    if ($request->hasFile('proof_of_delivery')) {
        foreach ($request->file('proof_of_delivery') as $file) {
            $fileName = time() . '_pod_' . uniqid() . '.' . $file->extension();
            $file->move(public_path('proofs_of_delivery'), $fileName);
            $proofOfDeliveryFileNames[] = $fileName;
        }
    }

    // Store the data including both proofs
    Trip::create([
        'arrival_proof' => json_encode($arrivalProofFileNames),
        'proof_of_delivery' => json_encode($proofOfDeliveryFileNames),
        'trip_completion' => $request->trip_completion,
        'plate_number' => $request->plate_number,
    ]);

    // Redirect or return response
    return redirect()->back()->with('success', 'Trip information saved successfully.');
}


}
