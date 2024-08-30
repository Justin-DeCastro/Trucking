<?php

namespace App\Http\Controllers;

use App\Models\Preventive;
use Illuminate\Http\Request;

class PreventiveController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'plate_number' => 'required|string',
            'parts_replaced' => 'required',
            'price_parts_replaced' => 'required',


        ]);

        // Create a new Rubix record
        Preventive::create($validatedData);

        // Redirect or show a success message
        return redirect()->back()->with('Message', "Successful");
    }
    public function edit($id)
    {
        $maintenance = Preventive::findOrFail($id);
        return view('maintenance.edit', compact('maintenance'));
    }

    // Update a specific maintenance record in storage
    public function update(Request $request, $id)
    {
        $maintenance = Preventive::findOrFail($id);
        $maintenance->update($request->all());
        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    // Remove a specific maintenance record from storage
    public function destroy($id)
    {
        $maintenance = Preventive::findOrFail($id);
        $maintenance->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
