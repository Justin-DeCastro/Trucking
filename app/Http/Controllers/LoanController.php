<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => 'required|date',
            'borrower' => 'required|string|max:255',
            'initial_amount' => 'required|numeric',
            'interest' => 'required|numeric',
            'payment_terms' => 'required|integer|between:1,12', // Validate payment_terms as an integer between 1 and 12
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
}
