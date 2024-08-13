<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Show the booking form
   

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
         
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pickup_date' => 'required|date',
            'pickup_address' => 'required|string|max:255',
            'dropoff_address' => 'required|string|max:255',
            'item_list' => 'required|string',
            'comments' => 'nullable|string',
        ]);
    
        // Generate a unique tracking number
        $trackingNumber = 'GPC-' . strtoupper(uniqid(mt_rand(), true));
    
        // Add the tracking number to the validated data
        $validatedData['tracking_number'] = $trackingNumber;
    
        // Create a new booking
        Booking::create($validatedData);
    
        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Booking submitted successfully! Tracking Number: ' . $trackingNumber);
    }
    // app/Http/Controllers/BookingController.php
    public function assignDriver(Request $request, $bookingId)
{
    $request->validate([
        'driver_id' => 'required|exists:drivers,id',
    ]);

    $booking = Booking::findOrFail($bookingId);
    $booking->driver_id = $request->input('driver_id');
    $booking->save();

    return redirect()->back()->with('success', 'Driver assigned successfully');
}

    
    

}
