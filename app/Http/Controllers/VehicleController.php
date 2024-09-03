<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    // Show the form
    // public function create()
    // {
    //     return view('vehicles.create');
    // }
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return redirect()->back()->with('message', 'Successful');
    }

    // Update an existing vehicle
   // app/Http/Controllers/VehicleController.php

   public function update(Request $request, $id)
   {
       try {
           // Validate the incoming request data
           $request->validate([
               'plate_number' => 'required|string|max:255',
               'truck_name' => 'required|string|max:255',
               'truck_model' => 'required|string|max:255',
               'truck_capacity' => 'required|string|max:255',
               'truck_status' => 'required|string|max:255',
               'quantity' => 'required|integer|min:0',
               'documents.*' => 'sometimes|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validate each document
           ]);

           // Find the vehicle by ID
           $vehicle = Vehicle::findOrFail($id);

           // Update the vehicle's properties
           $vehicle->plate_number = $request->input('plate_number');
           $vehicle->truck_name = $request->input('truck_name');
           $vehicle->truck_model = $request->input('truck_model');
           $vehicle->truck_capacity = $request->input('truck_capacity');
           $vehicle->truck_status = $request->input('truck_status');
           $vehicle->quantity = $request->input('quantity');

           // Handle document uploads
           if ($request->hasFile('documents')) {
               $documentPaths = [];
               foreach ($request->file('documents') as $document) {
                   // Generate a unique file name for each document
                   $fileName = time() . '_' . $document->getClientOriginalName();
                   // Move the document to the public/documents directory
                   $document->move(public_path('documents'), $fileName);
                   // Save the file path to the documentPaths array
                   $documentPaths[] = 'documents/' . $fileName;
               }
               // Update the vehicle's documents field with the uploaded document paths
               $vehicle->documents = $documentPaths;
           }

           // Save the updated vehicle
           $vehicle->save();

           // Redirect back with a success message
           return redirect()->back()->with('success', 'Vehicle updated successfully.');
       } catch (\Exception $e) {
           // Redirect back with an error message
           return redirect()->back()->with('error', 'Failed to update vehicle.');
       }
   }





    // Delete a vehicle
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->back()->with('message', 'Successful');
    }

    // Store the vehicle data
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'plate_number' => 'required|string|max:255',
            'truck_name' => 'required|string|max:255',
            'truck_model' => 'required|string|max:255',
            'truck_capacity' => 'required|string|max:255',
            'truck_status' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'documents.*' => 'sometimes|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validate each document
        ]);

        // Create a new Vehicle instance and save it to the database
        $vehicle = Vehicle::create([
            'plate_number' => $request->plate_number,
            'truck_name' => $request->truck_name,
            'truck_model' => $request->truck_model,
            'truck_capacity' => $request->truck_capacity,
            'truck_status' => $request->truck_status,
            'quantity' => $request->quantity,
            'documents' => [], // Initialize documents as an empty array
        ]);

        // Check if the request has files for 'documents'
        if ($request->hasFile('documents')) {
            $documentPaths = []; // Initialize an array to hold document paths
            foreach ($request->file('documents') as $document) {
                // Generate a unique file name for each document
                $fileName = time() . '_' . $document->getClientOriginalName();
                // Move the document to the public/documents directory
                $document->move(public_path('documents'), $fileName);
                // Save the file path to the documentPaths array
                $documentPaths[] = 'documents/' . $fileName;
            }
            // Update the vehicle's documents field with the uploaded document paths
            $vehicle->update(['documents' => $documentPaths]);
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Vehicle created successfully!');
    }

public function useVehicle($id)
{
    $vehicle = Vehicle::find($id);

    if (!$vehicle) {
        return redirect()->back()->with('error', 'Vehicle not found!');
    }

    if ($vehicle->quantity > 0) {
        $vehicle->decrement('quantity');
        return redirect()->back()->with('success', 'Vehicle used successfully!');
    } else {
        return redirect()->back()->with('error', 'No available vehicle to use!');
    }
}

}
