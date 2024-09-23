<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // Include this at the top of your controller
use App\Models\RatePerMile;
use Illuminate\Http\Request;

class RatePerMileController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request inputs
        $validated = $request->validate([
            'plate_number' => 'required|exists:bookings,plate_number',
            'rate_per_mile' => 'required|numeric',
            'km' => 'required|numeric',
            'gross_income' => 'required|numeric',
            'date' => 'required|date',
            'operational_costs' => 'required|numeric',
            'payment_screenshot' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Changed to nullable
        ]);

        // Handle the payment screenshot file upload
        if ($request->hasFile('payment_screenshot')) {
            // Get file from request
            $file = $request->file('payment_screenshot');

            // Generate a unique name for the file before saving it
            $filename = time() . '_' . $file->getClientOriginalName();

            // Define the destination path for the file
            $destinationPath = public_path('payment_screenshots');

            // Create the directory if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move the file to the public directory
            $file->move($destinationPath, $filename);

            // Store the filename in the database
            $validated['payment_screenshot'] = 'payment_screenshots/' . $filename;
        } else {
            $validated['payment_screenshot'] = null; // Handle cases where no file is uploaded
        }

        // Calculate gross income if needed (assuming rate_per_mile and km are set)
        if (isset($validated['rate_per_mile']) && isset($validated['km'])) {
            $validated['gross_income'] = $validated['rate_per_mile'] * $validated['km'];
        }

        // Store the validated data in the database
        RatePerMile::create($validated);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Payment record created successfully!');
    }


    public function submit(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'plate_number' => 'required|exists:bookings,plate_number',
            'rate_per_mile' => 'required|numeric',
            'km' => 'required|numeric',
            'gross_income' => 'required|numeric',
            'date' => 'required|date',
            'proof_of_payment' => 'nullable|file|mimes:jpeg,png,pdf|max:2048', // Add max file size
            'operational_costs' => 'required|numeric',
        ]);

        // Handle file upload
        if ($request->hasFile('proof_of_payment')) {
            $file = $request->file('proof_of_payment');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path('proofs_of_payment');

            // Create directory if it doesn't exist
            if (!file_exists($filePath)) {
                mkdir($filePath, 0755, true);
            }

            // Move file to public directory
            $file->move($filePath, $fileName);
            $validatedData['proof_of_payment'] = 'proofs_of_payment/' . $fileName;
        }

        // Create a new RatePerMile record
        RatePerMile::create($validatedData);

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
