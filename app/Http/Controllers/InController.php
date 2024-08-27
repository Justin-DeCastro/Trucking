<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Account;

class InController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'date' => 'required|date',
            'particulars' => 'required|string',
            'deposit_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'payment_channel' => 'nullable|string',
            'proof_payment' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Handle file upload if present
        $proofPaymentPath = null;
        if ($request->hasFile('proof_payment')) {
            $file = $request->file('proof_payment');
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Move the file to the public 'proofs' directory
            $filePath = $file->move(public_path('proofs'), $fileName);
            $proofPaymentPath = 'proofs/' . $fileName;
        }

        // Create a new transaction record
        Transaction::create([
            'account_id' => $validated['account_id'],
            'date' => $validated['date'],
            'particulars' => $validated['particulars'],
            'payment_channel' => $validated['payment_channel'],
            'deposit_amount' => $validated['deposit_amount'],
            'withdraw_amount' => 0, // No withdrawal amount for deposits
            'notes' => $validated['notes'],
            'proof_payment' => $proofPaymentPath, // Store file path if present
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Deposit successfully added.');
    }

}
