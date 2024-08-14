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
               'truck_name' => 'required|string|max:255',
               'truck_capacity' => 'required|string|max:255',
               'truck_status' => 'required|string|max:255',
           ]);
   
           // Find the vehicle by ID
           $vehicle = Vehicle::findOrFail($id);
   
           // Update the vehicle's properties
           $vehicle->truck_name = $request->input('truck_name');
           $vehicle->truck_capacity = $request->input('truck_capacity');
           $vehicle->truck_status = $request->input('truck_status');
   
           // Save the updated vehicle
           $vehicle->save();
   
           // Return a success response
           return response()->json(['message' => 'Vehicle updated successfully.'], 200);
       } catch (\Exception $e) {
           // Return an error response
           return response()->json(['message' => 'Failed to update vehicle.'], 500);
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
        $request->validate([
            'truck_name' => 'required|string|max:255',
            'truck_capacity' => 'required|string|max:255',
            'truck_status' => 'required|string|max:255',
        ]);

        Vehicle::create([
            'truck_name' => $request->truck_name,
            'truck_capacity' => $request->truck_capacity,
            'truck_status' => $request->truck_status,
        ]);

        return redirect()->back()->with('success', 'Vehicle created successfully!');
    }
}
