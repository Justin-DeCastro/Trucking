<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderStatusUpdated;
use App\Models\Rubix;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

    public function getPlateNumberCounts()
    {
        // Retrieve all unique plate numbers with their counts and status counts
        $plateNumberCounts = Booking::select('plate_number')
            ->selectRaw('count(*) as total_bookings')
            ->selectRaw('GROUP_CONCAT(DISTINCT status) as statuses')
            ->groupBy('plate_number')
            ->get();
    
        // Prepare data for each status count
        $plateNumberDetails = $plateNumberCounts->map(function ($plate) {
            // Get booking details for the plate number
            $statusCounts = Booking::select('status')
                ->where('plate_number', $plate->plate_number)
                ->groupBy('status')
                ->selectRaw('count(*) as count')
                ->pluck('count', 'status')
                ->toArray();
            
            $plate->status_counts = $statusCounts;
            return $plate;
        });
    
        // Handle empty result set by ensuring it's an empty collection
        if ($plateNumberCounts === null) {
            $plateNumberDetails = collect(); // Return an empty collection
        }
    
        // Pass the data to the view
        return view('Admin.PlatenumberBookingCount', [
            'plateNumberCounts' => $plateNumberDetails,
        ]);
    }
    
  

    public function getBookingCountByPlateNumber(Request $request)
    {
        // Validate the plate number
        $validatedData = $request->validate([
            'plate_number' => 'required|string|max:255',
        ]);
    
        // Retrieve the plate number from the request
        $plateNumber = $validatedData['plate_number'];
    
        // Get the count of bookings with the given plate number
        $bookingCount = Booking::where('plate_number', $plateNumber)->count();
    
        // Return the count as a JSON response or however you prefer
        return response()->json([
            'plate_number' => $plateNumber,
            'booking_count' => $bookingCount,
        ]);
    }
    

    // Handle form submission
    public function submitForm(Request $request)
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
            'consignee_mobile' => 'required|string|max:255',
            'consignee_city' => 'required|string|max:255',
            'consignee_province' => 'required|string|max:255',
            'consignee_barangay' => 'required|string|max:255',
            'consignee_building_type' => 'required|string|max:255',
            'merchant_name' => 'required|string|max:255',
            'merchant_address' => 'required|string|max:255',
            'merchant_email' => 'required|email|max:255',
            'merchant_mobile' => 'required|string|max:255',
            'merchant_city' => 'required|string|max:255',
            'merchant_province' => 'required|string|max:255',
            'driver_name' => 'required|string|max:255',
            'plate_number' => 'required|string|max:255',
            'date' => 'required|date',
            'truck_type' => 'required',
        ]);
    
        // Generate tracking number
        $trackingNumber = 'GDR-' . strtoupper(uniqid(mt_rand(), true));
        $validatedData['tracking_number'] = $trackingNumber;
    
        // Generate order number with the format '2024-(order_number)'
        $currentYear = date('Y'); // Gets the current year
    
        // Retrieve the last booking for the current year
        $lastBooking = Booking::whereYear('created_at', $currentYear)->orderBy('order_number', 'desc')->first();
    
        // Initialize order number
        if ($lastBooking && strpos($lastBooking->order_number, '-') !== false) {
            // Split the last order number by '-'
            $parts = explode('-', $lastBooking->order_number);
    
            // Check if the split parts are valid
            if (isset($parts[1]) && is_numeric($parts[1])) {
                $orderNumber = intval($parts[1]) + 1;
            } else {
                $orderNumber = 1;
            }
        } else {
            $orderNumber = 1;
        }
    
        // Format order number to start from 0001
        $formattedOrderNumber = str_pad($orderNumber, 4, '0', STR_PAD_LEFT);
        $validatedData['order_number'] = $currentYear . '-' . $formattedOrderNumber;
    
        // Create the booking
        $booking = Booking::create($validatedData);
    
        // Format the data for the QR code
        $formattedData = [
            "1. Sender Name: " . $validatedData['sender_name'],
            "2. Transport Mode: " . $validatedData['transport_mode'],
            "3. Shipping Type: " . $validatedData['shipping_type'],
            "4. Delivery Type: " . $validatedData['delivery_type'],
            "5. Journey Type: " . $validatedData['journey_type'],
            "6. Consignee Name: " . $validatedData['consignee_name'],
            "7. Consignee Address: " . $validatedData['consignee_address'],
            "8. Consignee Email: " . $validatedData['consignee_email'],
            "9. Consignee Mobile: " . $validatedData['consignee_mobile'],
            "10. Consignee City: " . $validatedData['consignee_city'],
            "11. Consignee Province: " . $validatedData['consignee_province'],
            "12. Consignee Barangay: " . $validatedData['consignee_barangay'],
            "13. Consignee Building Type: " . $validatedData['consignee_building_type'],
            "14. Merchant Name: " . $validatedData['merchant_name'],
            "15. Merchant Address: " . $validatedData['merchant_address'],
            "16. Merchant Email: " . $validatedData['merchant_email'],
            "17. Merchant Mobile: " . $validatedData['merchant_mobile'],
            "18. Merchant City: " . $validatedData['merchant_city'],
            "19. Merchant Province: " . $validatedData['merchant_province'],
            "20. Driver Name: " . $validatedData['driver_name'],
            "21. Plate Number: " . $validatedData['plate_number'],
            "22. Date: " . $validatedData['date'],
            "23. Truck Type: " . $validatedData['truck_type'],
            "24. Tracking Number: " . $trackingNumber,
            "25. Order Number: " . $validatedData['order_number'],
        ];
    
        // Convert formatted data to a single string
        $formattedDataString = implode("\n", $formattedData);
    
        // Generate QR code
        $filename = time() . '-' . $trackingNumber . '.svg';
        $qrCodePath = 'qrcodes/' . $filename;
        $qrCodeImage = QrCode::size(300)->generate($formattedDataString);
        file_put_contents(public_path($qrCodePath), $qrCodeImage);
    
        // Save QR code path to the booking
        $booking->update(['qr_code' => $qrCodePath]);
    
        // Update the truck status if truck_type is provided
        $truckId = $request->input('truck_type'); // Ensure 'truck_type' field exists in the form
        if ($truckId) {
            $truck = Vehicle::find($truckId);
    
            if ($truck) {
                // Decrement the quantity of the truck
                $truck->decrement('quantity');
    
                // Update truck status if quantity is 0
                if ($truck->quantity <= 0) {
                    $truck->update([
                        'truck_status' => 'Not Available',
                    ]);
                }
            }
        }
    
        // Generate the URL to the QR code image
        $qrCodeUrl = asset($qrCodePath);
    
        // Redirect to the confirmation view with data
        return view('Home.confirmation', [
            'trackingNumber' => $trackingNumber,
            'qrCodeUrl' => $qrCodeUrl,
            'orderNumber' => $validatedData['order_number'],
        ]);
    }
    



    public function store(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:255',
            'transport_mode' => 'required|string|max:255',
            'shipping_type' => 'required|string|max:255',
            'delivery_type' => 'required|string|max:255',
            'journey_type' => 'required|string|max:255',
            'consignee_name' => 'required|string|max:255',
            'consignee_address' => 'required|string|max:255',
            'consignee_email' => 'required|email|max:255',
            'consignee_mobile' => 'required|string|max:255',
            'consignee_city' => 'required|string|max:255',
            'consignee_province' => 'required|string|max:255',
            'consignee_barangay' => 'required|string|max:255',
            'consignee_building_type' => 'required|string|max:255',
            'merchant_name' => 'required|string|max:255',
            'merchant_address' => 'required|string|max:255',
            'merchant_email' => 'required|email|max:255',
            'merchant_mobile' => 'required|string|max:255',
            'merchant_city' => 'required|string|max:255',
            'merchant_province' => 'required|string|max:255',

        ]);

        // Validate the request


        // Create a new Rubix record
        Rubix::create([
            'sender_name' => $request->sender_name,
            'transport_mode' => $request->transport_mode,
            'shipping_type' => $request->shipping_type,
            'delivery_type' => $request->delivery_type,
            'journey_type' => $request->journey_type,
            'consignee_name' => $request->consignee_name,
            'consignee_address' => $request->consignee_address,
          'consignee_email' => $request->consignee_email,
          'consignee_mobile' => $request->consignee_mobile,
          'consignee_city' => $request->consignee_city,
          'consignee_province' => $request->consignee_province,
          'consignee_barangay' => $request->consignee_barangay,
          'consignee_building_type' => $request->consignee_building_type,
          'merchant_name' => $request->merchant_name,
          'merchant_address' => $request->merchant_address,
          'merchant_email' => $request->merchant_email,
          'merchant_mobile' => $request->merchant_mobile,
          'merchant_city' => $request->merchant_city,
          'merchant_province' => $request->merchant_province,

        ]);


        // Redirect back with a success message
        return redirect()->back()->with('message', 'Booking successfully created!');
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

public function updateOrderStatus(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'order_status' => 'required|string|in:Pod_returned,Delivery successful,For Pick-up,First_delivery_attempt',
    ]);

    // Find the booking by ID
    $booking = Booking::findOrFail($id);

    // Get the consignee email
    $consigneeEmail = $booking->consignee_email;

    // Define the sender's name and tracking number
    $senderName = $booking->sender_name; // Ensure this field exists in your Booking model
    $trackingNumber = $booking->tracking_number; // Ensure this field exists in your Booking model

    // Update the status
    $booking->status = $request->input('order_status');
    $booking->save();

    // Send the email notification
    Mail::to($consigneeEmail)->send(new OrderStatusUpdated($booking, $senderName, $trackingNumber));

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Order status updated and notification sent successfully.');
}



    public function updateRemarks(Request $request, $id)
    {
        // Validate the request
        $request->validate([
         'remarks' => 'required|string',
        ]);

        // Find the booking by ID
        $booking = Booking::findOrFail($id);
        
        // Update the remarks
        $booking->remarks = $request->input('remarks');
        $booking->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Remarks added successfully.');
    }
    public function updatePictures(Request $request, $id)
{
    // Validate the request to accept only one image file
    $request->validate([
        'proof_of_delivery' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
    ]);

    // Find the booking
    $booking = Booking::findOrFail($id);

    // Define the path where the file will be stored
    $destinationPath = public_path('pictures'); // Ensure this directory exists or create it

    // Check if the directory exists and is writable
    if (!is_dir($destinationPath)) {
        mkdir($destinationPath, 0755, true);
    }

    // Check if a file was uploaded
    if ($request->hasFile('proof_of_delivery')) {
        try {
            $file = $request->file('proof_of_delivery');
    
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Move the file to the destination path
            $file->move($destinationPath, $fileName);
    
            // Save the file path in the database
            $booking->update(['proof_of_delivery' => 'pictures/' . $fileName]);

            // Redirect back or to a specific route with success message
            return redirect()->back()->with('success', 'Picture uploaded successfully.');

        } catch (\Exception $e) {
            // Log the error message for debugging
            \Log::error('File upload error: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred while uploading the picture.');
        }
    }

    return redirect()->back()->withErrors('No file was uploaded.');
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
