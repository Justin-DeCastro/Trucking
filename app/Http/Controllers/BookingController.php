<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
class BookingController extends Controller
{
    // Show the booking form
    public function updateOrderAmount(Request $request, Booking $booking)
    {
        // Validate the order amount input
        $request->validate([
            'order_amount' => 'required|numeric|min:0', // Ensure it's a positive number
        ]);
    
        // Ensure the user is authorized to perform this action (if necessary)
        // Example authorization check: Ensure the user is the assigned driver (adjust as needed)
        if (Auth::id() !== $booking->driver_id) {
            abort(403, 'Unauthorized action.');
        }
    
        // Update the order amount
        $booking->update(['order_amount' => $request->input('order_amount')]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Order amount updated successfully.');
    }
    
    
    

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'receiver_name'=> 'required|string|max:255',
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
    // Validate that the driver exists and is a courier
    $request->validate([
        'driver_id' => [
            'required',
            function ($attribute, $value, $fail) {
                $user = User::find($value);
                if (!$user || !$user->isCourier()) {
                    $fail('The selected driver is invalid or not a courier.');
                }
            },
        ],
    ]);

    // Find the booking or fail
    $booking = Booking::findOrFail($bookingId);

    // Retrieve the driver from the users table
    $driver = User::find($request->input('driver_id'));

    if (!$driver) {
        return redirect()->back()->with('error', 'Driver not found.');
    }

    // Assign the driver to the booking
    $booking->driver_id = $driver->id;
    $booking->save();

    // Redirect back with a success message including the driver's name
    return redirect()->back()->with('success', 'Driver ' . $driver->name . ' assigned successfully.');
}
public function updateOrderStatus(Request $request, Booking $booking)
{
    // Validate the order status input
    $request->validate([
        'order_status' => 'required|in:Pickup,Out For Delivery,Shipped,Delivered,Returned,Cancel',
    ]);

    // Ensure the user is authorized to perform this action (if necessary)
    // Example authorization check: Ensure the user is the assigned driver (adjust as needed)
    if (Auth::id() !== $booking->driver_id) {
        abort(403, 'Unauthorized action.');
    }

    // Update the order status
    $booking->update(['order_status' => $request->input('order_status')]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Order status updated successfully.');
}





    
    
    
    

}
