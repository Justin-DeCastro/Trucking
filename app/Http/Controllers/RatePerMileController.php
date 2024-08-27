<?php

namespace App\Http\Controllers;

use App\Models\RatePerMile;
use Illuminate\Http\Request;

class RatePerMileController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'rate_per_mile' => 'required',
            'operational_costs' => 'required',
            'km' => 'required',


        ]);

        // Create a new Rubix record
        RatePerMile::create($validatedData);

        // Redirect or show a success message
        return redirect()->back()->with('Message', "Successful");
    }
    public function edit($id)
    {
        $maintenance = RatePerMile::findOrFail($id);
        return view('maintenance.edit', compact('maintenance'));
    }

    // Update a specific maintenance record in storage
    public function update(Request $request, $id)
    {
        $maintenance = RatePerMile::findOrFail($id);
        $maintenance->update($request->all());
        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    // Remove a specific maintenance record from storage
    public function destroy($id)
    {
        $maintenance = RatePerMile::findOrFail($id);
        $maintenance->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
}
