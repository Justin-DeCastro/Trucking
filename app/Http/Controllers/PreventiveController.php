<?php

namespace App\Http\Controllers;

use App\Models\Preventive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreventiveController extends Controller
{
    public function submit(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'plate_number' => 'required|string',
        'truck_model' => 'required|string',
        'parts_replaced' => 'required|string',
        'price_parts_replaced' => 'required|numeric',
        'proof_of_need_to_fixed.*' => 'required|image|mimes:jpg,png,jpeg',
        'proof_of_payment.*' => 'required|image|mimes:jpg,png,jpeg',
    ]);

    // Handle file uploads for proof_of_need_to_fixed
    $proofOfNeedToFixedPaths = [];
    if ($request->hasFile('proof_of_need_to_fixed')) {
        foreach ($request->file('proof_of_need_to_fixed') as $file) {
            $path = $file->move(public_path('proofs'), $file->getClientOriginalName());
            $proofOfNeedToFixedPaths[] = 'proofs/' . $file->getClientOriginalName();
        }
    }

    // Handle file uploads for proof_of_payment
    $proofOfPaymentPaths = [];
    if ($request->hasFile('proof_of_payment')) {
        foreach ($request->file('proof_of_payment') as $file) {
            $path = $file->move(public_path('proofs'), $file->getClientOriginalName());
            $proofOfPaymentPaths[] = 'proofs/' . $file->getClientOriginalName();
        }
    }

    // Append paths to validated data
    $validatedData['proof_of_need_to_fixed'] = $proofOfNeedToFixedPaths;
    $validatedData['proof_of_payment'] = $proofOfPaymentPaths;

    // Create a new Preventive record
    Preventive::create($validatedData);

    // Redirect or show a success message
    return redirect()->back()->with('message', "Successful");
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

        // Validate the request
        $validatedData = $request->validate([
            'plate_number' => 'required|string',
            'truck_model' => 'required|string',
            'parts_replaced' => 'required|string',
            'price_parts_replaced' => 'required|numeric',
            'proof_of_need_to_fixed.*' => 'nullable|image|mimes:jpg,png,jpeg',
            'proof_of_payment.*' => 'nullable|image|mimes:jpg,png,jpeg',
        ]);

        // Handle file uploads
        if ($request->hasFile('proof_of_need_to_fixed')) {
            // Delete old files
            foreach (json_decode($maintenance->proof_of_need_to_fixed, true) as $filePath) {
                if (file_exists(public_path($filePath))) {
                    unlink(public_path($filePath));
                }
            }

            $validatedData['proof_of_need_to_fixed'] = [];
            foreach ($request->file('proof_of_need_to_fixed') as $file) {
                $path = $file->move(public_path('proofs'), $file->getClientOriginalName());
                $validatedData['proof_of_need_to_fixed'][] = $path;
            }
        } else {
            // Preserve existing file paths if no new files are uploaded
            $validatedData['proof_of_need_to_fixed'] = json_decode($maintenance->proof_of_need_to_fixed, true);
        }

        if ($request->hasFile('proof_of_payment')) {
            // Delete old files
            foreach (json_decode($maintenance->proof_of_payment, true) as $filePath) {
                if (file_exists(public_path($filePath))) {
                    unlink(public_path($filePath));
                }
            }

            $validatedData['proof_of_payment'] = [];
            foreach ($request->file('proof_of_payment') as $file) {
                $path = $file->move(public_path('proofs'), $file->getClientOriginalName());
                $validatedData['proof_of_payment'][] = $path;
            }
        } else {
            // Preserve existing file paths if no new files are uploaded
            $validatedData['proof_of_payment'] = json_decode($maintenance->proof_of_payment, true);
        }

        // Update the maintenance record
        $maintenance->update($validatedData);

        // Redirect or show a success message
        return redirect()->back()->with('success', 'Record updated successfully!');
    }

    // Remove a specific maintenance record from storage
    public function destroy($id)
{
    // Find the record
    $maintenance = Preventive::findOrFail($id);

    // Decode the file paths from JSON
    $proofOfNeedToFixedPaths = json_decode($maintenance->proof_of_need_to_fixed, true) ?? [];
    $proofOfPaymentPaths = json_decode($maintenance->proof_of_payment, true) ?? [];

    // Delete files for proof_of_need_to_fixed
    foreach ($proofOfNeedToFixedPaths as $filePath) {
        $fullPath = public_path($filePath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    // Delete files for proof_of_payment
    foreach ($proofOfPaymentPaths as $filePath) {
        $fullPath = public_path($filePath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    // Delete the record
    $maintenance->delete();

    // Redirect with success message
    return redirect()->back()->with('success', 'Record deleted successfully!');
}

}
