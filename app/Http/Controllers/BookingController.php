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
        // Debugging: Log user and booking details
        \Log::info('Updating Order Amount:', [
            'current_user_id' => Auth::id(), // This will be null if the user is not logged in
            'booking_driver_id' => $booking->driver_id,
            'booking_id' => $booking->id,
        ]);
    
        // Validate the order amount input
        $request->validate([
            'order_amount' => 'required|numeric|min:0',
        ]);
    
        // Optional: If you still want some kind of check, you can add it here
        // For example, only allow the update if the booking is in a specific state
    
        // Update the order amount
        $booking->update([
            'order_amount' => $request->input('order_amount'),
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Order amount updated successfully.');
    }
    
    
    public function storePlateNumber(Request $request, Booking $booking)
    {
        // Validate the plate number input
        $request->validate([
            'plate_number' => 'required|string|max:255',
        ]);

        // Ensure the user is authorized to perform this action (if necessary)
        if (Auth::id() !== $booking->driver_id) {
            abort(403, 'Unauthorized action.');
        }

        // Update the booking with the plate number
        $booking->update(['plate_number' => $request->input('plate_number')]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Plate number saved successfully.');
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
    public function trackBooking(Request $request)
    {
        $trackingNumber = strtoupper($request->query('trackingNumber'));
    
        $booking = Booking::where('tracking_number', $trackingNumber)->first(['location', 'order_status']);
    
        if ($booking) {
            return view('Home.TrackBooking', [
                'location' => $booking->location,
                'order_status' => $booking->order_status
            ]);
        } else {
            return view('track', [
                'error' => 'Tracking number not found for the provided tracking number.'
            ]);
        }
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
        'order_status' => 'required|in:Pickup,Out For Delivery,Shipped,Delivered,Cancel,Waiting for Courier',
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
public function updatePaymentStatus(Request $request, Booking $booking)
{
    // Validate the payment status input
    $request->validate([
        'payment_status' => 'required|in:Not Yet Paid,Paid',
    ]);

    // Optionally, ensure the user is authorized (if necessary)
    // if (Auth::id() !== $booking->driver_id) {
    //     abort(403, 'Unauthorized action.');
    // }

    // Update the payment status
    $booking->update(['payment_status' => $request->input('payment_status')]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Payment status updated successfully.');
}



public function updateLocationStatus(Request $request, Booking $booking)
{
    
    // dd($request->all());

    // Validate the input
    $request->validate([
        'location' => 'required|in:Manila,Laguna,Batangas,Other',
       
    ]);

    // Ensure the user is authorized to perform this action
    if (Auth::id() !== $booking->driver_id) {
        abort(403, 'Unauthorized action.');
    }

    // Prepare data for updating
    $data = [
        'location' => $request->input('location'),
    ];

    // If location is 'Other', include 'other_location'
    if ($request->input('location') === 'Other') {
        $data['other_location'] = $request->input('other_location');
    } else {
        $data['other_location'] = null; // Clear 'other_location' if not needed
    }

    // Update the booking
    $booking->update($data);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Location status updated successfully.');
}




    
    
    
    

}
