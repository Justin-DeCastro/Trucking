<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget; // Import your BudgetRequest model
use Illuminate\Support\Facades\Storage;

class BudgetController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'date' => 'required|date',
            'department' => 'required|string|max:255',
            'budget_amount' => 'required|numeric|min:0',
            'expense_details' => 'required|string',
            'voucher' => 'required', // Adjust the file types and size as needed
            'requestee' => 'required', // Adjust the file types and size as needed
        ]);

        // Handle file upload for the voucher


        // Create a new budget request record
        Budget::create([
            'date' => $validatedData['date'],
            'department' => $validatedData['department'],
            'requestee' => $validatedData['requestee'],
            'budget_amount' => $validatedData['budget_amount'],
            'expense_details' => $validatedData['expense_details'],
            'voucher' =>$validatedData['voucher'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Budget request submitted successfully.');
    }
    public function approves($id)
{
    $loan = Budget::findOrFail($id);
    $loan->status = 'Approved';
    $loan->save();

    return redirect()->back()->with('success', 'Budget request approved successfully.');
}
public function approve($id)
{
    $budget = Budget::find($id);

    if ($budget) {
        $budget->status = 'Approved';
        $budget->approved_by = auth()->id(); // Set the approved_by field to the current user's ID
        $budget->save();

        return redirect()->back()->with('success', 'Budget approved successfully!');
    }

    return redirect()->back()->with('error', 'Budget not found.');
}

public function deny($id)
{
    $loan = Budget::findOrFail($id);
    $loan->status = 'Denied';
    $loan->save();

    return redirect()->back()->with('success', 'Budget request denied successfully.');
}

}
