<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Vehicle;
class BookingController extends Controller
{
    // Show the booking form
    public function updateSingleOrderAmount(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'order_amount' => 'required|numeric|min:0',
        ]);
    
        $booking = Booking::findOrFail($request->input('booking_id'));
        $booking->update([
            'order_amount' => $request->input('order_amount'),
        ]);
    
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
            'sender_name' => 'required|string|max:255',
            'list_of_products' => 'required|string|max:255',
            'pickup_address' => 'required|string|max:255',
            'sender_phone' => 'required|string|max:255',
            'item_list' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'weight' => 'required|numeric',
            'quantity' => 'required|numeric',
            'receiver_name' => 'required|string|max:255',
            'receiver_email' => 'required|email|max:255',
            'receiver_phone' => 'required|string|max:255',
            'dropoff_address' => 'required|string|max:255',
            'truck_type' => 'required|exists:vehicles,id', // Validate as an existing vehicle ID
        ]);
    
        // Handle file upload for item_list
        if ($request->hasFile('item_list')) {
            $file = $request->file('item_list');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('item_pictures'), $filename);
            $validatedData['item_list'] = 'item_pictures/' . $filename;
        }
    
        $trackingNumber = 'GPC-' . strtoupper(uniqid(mt_rand(), true));
        $validatedData['tracking_number'] = $trackingNumber;
    
        $booking = Booking::create($validatedData);
    
        // Update the truck status
        $truckId = $request->truck_type;
        $truck = Vehicle::find($truckId);
    
        if ($truck) {
            $truck->update([
                'truck_status' => 'Not Available',
            ]);
        }
    
        return redirect()->back()->with('success', 'Booking submitted successfully! Tracking Number: ' . $trackingNumber);
    }
    
    
    
   public function trackBooking(Request $request)
{
    $trackingNumber = strtoupper($request->query('trackingNumber'));

    $booking = Booking::where('tracking_number', $trackingNumber)->first(['location', 'order_status']);

    if ($booking) {
        // Assuming $booking->location contains 'latitude,longitude'
        return view('Home.TrackBooking', [
            'location' => $booking->location, // Ensure this is in "lat,lng" format
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
        'order_status' => 'required|in:To Pick-up,Picked-up,In Transit,For Delivery,Delivered',
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
public function updateActualWeight(Request $request, $id)
{
    $request->validate([
        'actual_weight' => 'required|numeric|min:0',
    ]);

    $booking = Booking::findOrFail($id);
    $booking->actual_weight = $request->input('actual_weight');
    $booking->save();

    return redirect()->back()->with('success', 'Actual weight updated successfully.');
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
