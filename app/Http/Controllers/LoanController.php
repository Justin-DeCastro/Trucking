<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Budget;

class LoanController extends Controller
{
    public function markAsPaid($id)
{
    $loan = Loan::findOrFail($id);
    $loan->status = 'Paid';
    $loan->save();

    return redirect()->back()->with('success', 'Loan marked as Paid');
}

public function markAsUnpaid($id)
{
    $loan = Loan::findOrFail($id);
    $loan->status = 'Unpaid';
    $loan->save();

    return redirect()->back()->with('success', 'Loan marked as Unpaid');
}

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => 'required|date',
            'borrower' => 'required|string|max:255',
            'initial_amount' => 'required|numeric',
            'interest_percentage' => 'required',
'mode_of_payment'=>'required',
            'payment_per_month' => 'required|numeric',  // Validate payment per month as a numeric value
            'payment_terms' => 'required|integer|min:1',  // Validate payment_terms as an integer with a minimum of 1
            'total_payment' => 'required|numeric',       // Validate total_payment as a numeric value
        ]);

        // Create a new loan record with validated data
        Loan::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Loan added successfully.');
    }

    public function loanamount()
    {
        $loans = Loan::all();
        return view('Accounting.Loan',compact('loans'));
    }
    public function requestbudget()
    {
        $budgets = Budget::all();
        return view('Accounting.RequestBudget',compact('budgets'));
    }

}
