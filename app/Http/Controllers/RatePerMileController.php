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
            'proof_of_payment' => 'required|file|mimes:jpeg,png,pdf', // Add validation for file type
            'operational_costs' => 'required|numeric',
        ]);

        // Handle file upload
        if ($request->hasFile('proof_of_payment')) {
            $proofOfPaymentPath = $request->file('proof_of_payment')->store('proofs_of_payment', 'public');
        } else {
            $proofOfPaymentPath = null; // Or handle the case where the file is not provided
        }

        // Find or create a RatePerMile record
        RatePerMile::updateOrCreate(
            ['plate_number' => $request->plate_number],
            [
                'proof_of_payment' => $proofOfPaymentPath,
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
    public function uploadProofOfPayment(Request $request)
    {
        $request->validate([
            'proof_of_payment' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('proof_of_payment')) {
            // Generate a unique filename for the file
            $filename = time() . '_' . $request->file('proof_of_payment')->getClientOriginalName();

            // Move the file to the public/proof_of_payments directory
            $filePath = $request->file('proof_of_payment')->move(public_path('proof_of_payments'), $filename);

            // Store only the file path in the database
            RatePerMile::create([
                'proof_of_payment' => 'proof_of_payments/' . $filename,
            ]);

            return back()->with('success', 'Proof of payment uploaded successfully!');
        }

        return back()->withErrors(['proof_of_payment' => 'File upload failed.']);
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
