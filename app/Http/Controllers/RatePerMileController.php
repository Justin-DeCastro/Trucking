<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // Include this at the top of your controller
use App\Models\RatePerMile;
use Illuminate\Http\Request;

class RatePerMileController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'plate_number' => 'required|exists:bookings,plate_number',
            'rate_per_mile' => 'required|numeric',
            'km' => 'required|numeric',
            'date' => 'required|date',
            'operational_costs' => 'required|numeric',
        ]);

        // Find or create a RatePerMile record
        $ratePerMile = RatePerMile::updateOrCreate(
            ['plate_number' => $request->plate_number],
            [
                'date' => $request->date,
                'rate_per_mile' => $request->rate_per_mile,
                'km' => $request->km,
                'operational_costs' => $request->operational_costs,
            ]
        );

        return redirect()->back()->with('success', 'Data saved successfully!');
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
