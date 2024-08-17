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
               'quantity' => 'required|integer|min:0', // Add validation for quantity
           ]);
   
           // Find the vehicle by ID
           $vehicle = Vehicle::findOrFail($id);
   
           // Update the vehicle's properties
           $vehicle->truck_name = $request->input('truck_name');
           $vehicle->truck_capacity = $request->input('truck_capacity');
           $vehicle->truck_status = $request->input('truck_status');
           $vehicle->quantity = $request->input('quantity'); // Update the quantity field
   
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
    $request->validate([
        'truck_name' => 'required|string|max:255',
        'truck_capacity' => 'required|string|max:255',
        'truck_status' => 'required|string|max:255',
        'quantity' => 'required|integer|min:0', // Add validation for quantity
    ]);

    Vehicle::create([
        'truck_name' => $request->truck_name,
        'truck_capacity' => $request->truck_capacity,
        'truck_status' => $request->truck_status,
        'quantity' => $request->quantity,
    ]);

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
