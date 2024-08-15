<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class ProofPaymentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'account_id' => 'required',
            'date' => 'required|date',
            'particulars' => 'required|string',
            'notes' => 'nullable|string',
            'proof_of_payment' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Validate file type and size
        ]);

        // Handle the file upload
        if ($request->hasFile('proof_of_payment')) {
            $file = $request->file('proof_of_payment');
            
            // Generate a unique filename to prevent conflicts
            $fileName = time() . '_' . $file->getClientOriginalName();
            
            // Move the file to the 'public/proofs' directory
            $filePath = $file->move(public_path('proofs'), $fileName);
    
            // Save the file path in the database
            $payment = new Transaction();
            $payment->account_id = $request->input('account_id');
            $payment->date = $request->input('date');
            $payment->particulars = $request->input('particulars');
            $payment->notes = $request->input('notes');
            $payment->proof_of_payment = 'proofs/' . $fileName; // Save the relative path
            $payment->save();
        }
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Proof of payment uploaded successfully.');
    }
}
