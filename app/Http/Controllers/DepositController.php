<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
class DepositController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => 'required|string|max:255',
            'particulars' => 'required|string|max:255',
            'deposit_amount' => 'required|string|max:255',
            // 'withdraw_amount' => 'required|string|max:255',
            'notes' => 'required|string|max:255',
           
        ]);
    
        // Create a new driver record with validated data
        Deposit::create([
            'date' => $request->date,
            'particulars' => $request->particulars,
            'deposit_amount' => $request->deposit_amount,
            // 'withdraw_amount' => $request->withdraw_amount,
            'notes' => $request->notes,
            
          
        ]);
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Deposit added successfully.');
    }
    public function balance(){
        
    }
}
