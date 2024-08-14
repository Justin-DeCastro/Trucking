<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Account;

class InController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'date' => 'required|date',
            'particulars' => 'required|string',
            'deposit_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        Transaction::create([
            'account_id' => $request->account_id,
            'date' => $request->date,
            'particulars' => $request->particulars,
            'deposit_amount' => $request->deposit_amount,
            'withdraw_amount' => 0, // No withdrawal amount for deposits
            'notes' => $request->notes,
        ]);

        return redirect()->back()->with('success', 'Deposit successfully added.');
    }
}
