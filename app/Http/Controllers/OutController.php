<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Account;

class OutController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'date' => 'required|date',
            'particulars' => 'required|string',
            'withdraw_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        Transaction::create([
            'account_id' => $request->account_id,
            'date' => $request->date,
            'particulars' => $request->particulars,
            'deposit_amount' => 0, // No deposit amount for withdrawals
            'withdraw_amount' => $request->withdraw_amount,
            'notes' => $request->notes,
        ]);

        return redirect()->back()->with('success', 'Withdrawal successfully added.');
    }
}
