<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GDRAccounting;
class GDRAccountingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request inputs
        $validated = $request->validate([
            'date' => 'required|date',
            'particulars' => 'required|string|max:255',
            'payment_amount' => 'required|numeric',
            'payment_channel' => 'required|string|max:100',
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Restrict file size and types
            'notes' => 'nullable|string|max:500',
        ]);

        // Handle the proof of payment file upload
        if ($request->hasFile('proof_of_payment')) {
            // Get file from request
            $file = $request->file('proof_of_payment');

            // Generate a unique name for the file before saving it
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the public directory (you can create a specific folder if needed)
            $file->move(public_path('uploads/proof_of_payments'), $filename);

            // Store the filename in the database
            $validated['proof_of_payment'] = 'uploads/proof_of_payments/' . $filename;
        }

        // Store the validated data in the database
        GDRAccounting::create($validated);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Payment record created successfully!');
    }

}
