<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    // Show the form
    // public function create()
    // {
    //     return view('vehicles.create');
    // }
    public function edit($id)
    {
        $vehicle = Expense::findOrFail($id);
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
           $vehicle = Expense::findOrFail($id);
   
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
        $vehicle = Expense::findOrFail($id);
        $vehicle->delete();

        return redirect()->back()->with('message', 'Successful');
    }

    // Store the vehicle data
    public function store(Request $request)
    {
        $request->validate([
            'fuel_cost' => 'required|string|max:255',
            'maintenance_repairs' => 'required|string|max:255',
            'tolls_fees' => 'required|string|max:255',
            'driver_expenses' => 'required|string|max:255',
        ]);

        Expense::create([
            'fuel_cost' => $request->fuel_cost,
            'maintenance_repairs' => $request->maintenance_repairs,
            'tolls_fees' => $request->tolls_fees,
            'driver_expenses' => $request->driver_expenses,
        ]);

        return redirect()->back()->with('success', 'Vehicle created successfully!');
    }
}
