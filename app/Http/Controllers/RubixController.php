<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubix;

class RubixController extends Controller
{
    // Show the form
   

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'sender_name' => 'required|string|max:255',
            'transport_mode' => 'required|string|max:255',
            'shipping_type' => 'required|string|max:255',
            'delivery_type' => 'required|string|max:255',
            'journey_type' => 'required|string|max:255',
            'consignee_name' => 'required|string|max:255',
            'consignee_address' => 'required|string|max:255',
            'consignee_email' => 'required|email|max:255',
            'consignee_mobile' => 'required|string|max:20',
            'consignee_city' => 'required|string|max:255',
            'consignee_province' => 'required|string|max:255',
            'consignee_barangay' => 'required|string|max:255',
            'consignee_building_type' => 'required|string|max:255',
            'merchant_name' => 'required|string|max:255',
            'merchant_address' => 'required|string|max:255',
            'merchant_email' => 'required|email|max:255',
            'merchant_mobile' => 'required|string|max:20',
            'merchant_city' => 'required|string|max:255',
            'merchant_province' => 'required|string|max:255',
        ]);
        $trackingNumber = 'GPC-' . strtoupper(uniqid(mt_rand(), true));
        $validatedData['tracking_number'] = $trackingNumber;
        // Create a new Rubix record
        Rubix::create($validatedData);

        // Redirect or show a success message
        return redirect()->back()->with('Message', "Successful");
    }
}
