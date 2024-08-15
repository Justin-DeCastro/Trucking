<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\Deposit;

class WithdrawController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => 'required|date',
            'particulars' => 'required|string|max:255',
            'withdraw_amount' => 'required|numeric',
            'notes' => 'nullable|string|max:255',
        ]);

        // Create a new withdraw record with validated data
        $withdraw = Withdraw::create([
            'date' => $request->date,
            'particulars' => $request->particulars,
            'withdraw_amount' => $request->withdraw_amount,
            'notes' => $request->notes,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Withdraw added successfully.');
    }

    public function index()
    {
        $withdraws = Withdraw::with('deposits')->get();
        return view('withdraws.index', compact('withdraws'));
    }

    public function balance()
    {
        $withdraws = Withdraw::with('deposits')->get();

        // Calculate the outstanding balance for each withdraw
        foreach ($withdraws as $withdraw) {
            $totalDeposits = $withdraw->deposits->sum('deposit_amount');
            $withdraw->outstanding_balance = $withdraw->withdraw_amount - $totalDeposits;
        }

        return view('withdraws.balance', compact('withdraws'));
    }
}
