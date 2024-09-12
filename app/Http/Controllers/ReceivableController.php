<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receivable;
class ReceivableController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'issuer' => 'required',
            'borrower' => 'required',
            'principal' => 'required|numeric',
            'mode_of_payment' => 'required|in:principal,interest',
            'date_borrowed' => 'required|date',
            'pay_now_date' => 'nullable|date',
            'pay_later_date' => 'nullable|date',
        ]);

        Receivable::create([
            'issuer' => $request->issuer,
            'borrower' => $request->borrower,
            'principal' => $request->principal,
            'mode_of_payment' => $request->mode_of_payment,
            'date_borrowed' => $request->date_borrowed,
            'pay_now_date' => $request->pay_now_date,
            'pay_later_date' => $request->pay_later_date,
        ]);

        return redirect()->back()->with('success', 'Receivable created successfully.');
    }
}
