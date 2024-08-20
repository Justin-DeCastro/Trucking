<?php

namespace App\Http\Controllers;

use App\Models\PricingSalary;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'delivery_routes' => 'required|string|max:255',
            'driver_salary' => 'required|string|max:255',
            'helper_salary' => 'required|string|max:255',
            
        ]);
        
        // Create a new Rubix record
        PricingSalary::create($validatedData);

        // Redirect or show a success message
        return redirect()->back()->with('Message', "Successful");
    }
}
