<?php

// app/Http/Controllers/ExpenseController.php
namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'account_id' => 'required|exists:accounts,id',
            'date' => 'required|date',
            'particulars' => 'required|string|max:255',
            'expense_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new expense record
        Transaction::create([
            'account_id' => $request->input('account_id'),
            'date' => $request->input('date'),
            'particulars' => $request->input('particulars'),
            'expense_amount' => $request->input('expense_amount'),
            'notes' => $request->input('notes'),
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Expense recorded successfully!');
    }

    // Optionally, you can add methods for editing and deleting expenses
}

