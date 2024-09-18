<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
  use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;
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
        $monthlyBookings = Booking::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
        ->groupBy('year', 'month')
        ->get()
        ->keyBy(function ($item) {
            return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
        })
        ->map(function ($item) {
            return $item->count;
        });

        // Retrieve all unique plate numbers with their counts, status counts, and order_status counts
        $plateNumberCounts = Booking::select('plate_number')
            ->selectRaw('count(*) as total_bookings')
            ->selectRaw('GROUP_CONCAT(DISTINCT status) as statuses')
            ->selectRaw('GROUP_CONCAT(DISTINCT order_status) as order_statuses')
            ->groupBy('plate_number')
            ->get();

        // Prepare data for each status count including order_status
        $plateNumberDetails = $plateNumberCounts->map(function ($plate) {
            // Get booking details for the plate number
            $statusCounts = Booking::select('status', 'order_status')
                ->where('plate_number', $plate->plate_number)
                ->groupBy('status', 'order_status')
                ->selectRaw('count(*) as count')
                ->get()
                ->groupBy('status')
                ->map(function ($group) {
                    return $group->pluck('count', 'order_status')->toArray();
                })
                ->toArray();

            $plate->status_counts = $statusCounts;
            return $plate;
        });

        // Handle empty result set by ensuring it's an empty collection
        if ($plateNumberCounts->isEmpty()) {
            $plateNumberDetails = collect(); // Return an empty collection
        }

        // Pass the data to the view
        return view('Admin.PlatenumberBookingCount', [
            'plateNumberCounts' => $plateNumberDetails,
            'monthlyBookings' => $monthlyBookings,
        ]);
    }


    public function getDriverPlateNumberCounts()
    {
        // Fetch all drivers with their role as courier
        $driverDetails = Booking::join('users', 'users.id', '=', 'bookings.driver_name')
            ->where('users.role', 'courier')
            ->select('users.name as driver_name')
            ->selectRaw('COUNT(bookings.id) as total_bookings')
            ->groupBy('users.name')
            ->get();

        // Prepare booking details grouped by driver
        $driverDetails = $driverDetails->map(function ($driver) {
            // Get all bookings for the driver grouped by necessary fields
            $bookingsByDriver = Booking::join('users', 'users.id', '=', 'bookings.driver_name')
                ->where('users.name', $driver->driver_name)
                ->where('users.role', 'courier')
                ->groupBy('bookings.created_at', 'bookings.product_name', 'bookings.consignee_address')
                ->selectRaw('count(*) as count, DATE_FORMAT(bookings.created_at, "%M %d, %Y") as date, bookings.product_name, bookings.consignee_address')
                ->get();

            // Structure data for display
            $driver->bookingDetails = $bookingsByDriver->map(function ($booking) {
                return [
                    'date' => $booking->date,
                    'product_name' => $booking->product_name,
                    'count' => $booking->count,
                    'consignee_address' => $booking->consignee_address,

                ];
            });

            return $driver;
        });

        return view('Admin.DriverBookingCount', [
            'driverDetails' => $driverDetails,
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
// In your controller

public function getAccountData(Request $request)
{
    // Validate the request
    $request->validate([
        'account' => 'required|string'
    ]);

    // Fetch all data based on the selected account
    $account = $request->query('account');
    $data = Booking::where('sender_name', $account)->get(); // Use get() to retrieve all matching records

    // Format the data as an array of arrays
    $formattedData = $data->map(function ($item) {
        return [
            'trip_ticket' => $item->trip_ticket,
            'driver_name' => $item->driver_name,
            'plate_number' => $item->plate_number,
            'delivery_type' => $item->delivery_type,
            'journey_type' => $item->journey_type,
            'date' => $item->date,
            'product_name' => $item->product_name,

            'consignee_name' => $item->consignee_name,
            'consignee_address' => $item->consignee_address,
            'consignee_email' => $item->consignee_email,
            'consignee_mobile' => $item->consignee_mobile,
            'consignee_city' => $item->consignee_city,
            'consignee_province' => $item->consignee_province,
            'consignee_barangay' => $item->consignee_barangay,
            'consignee_building_type' => $item->consignee_building_type,
            'merchant_name' => $item->merchant_name,
            'merchant_address' => $item->merchant_address,
            'merchant_email' => $item->merchant_email,
            'merchant_mobile' => $item->merchant_mobile,
            'merchant_city' => $item->merchant_city,
            'merchant_province' => $item->merchant_province,
            'truck_type' => $item->truck_type,
            // Add more fields if necessary
        ];
    });

    // Return the data as JSON
    return response()->json($formattedData);
}



    // Handle form submission
   // Import the HTTP client

   public function submitForm(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'driver_name' => 'required|string|max:255',
        'plate_number' => 'required|string|max:255',
        'date' => 'required|date',
        'sender_name' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'transport_mode' => 'required|string|max:255',
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
        'truck_type' => 'required',
    ]);

    // Extract addresses and other details
    $merchantAddress = $validatedData['merchant_address'];
    $consigneeAddress = $validatedData['consignee_address'];
    $apiKey = env('GOOGLE_MAPS_API_KEY');

    // Make a request to the Distance Matrix API
    $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json', [
        'origins' => $merchantAddress,
        'destinations' => $consigneeAddress,
        'key' => $apiKey,
    ]);

    // Decode the response
    $data = $response->json();
    $travelTimeMinutes = null;
    if ($data['status'] == 'OK') {
        $elements = $data['rows'][0]['elements'];
        if (!empty($elements) && $elements[0]['status'] == 'OK') {
            $duration = $elements[0]['duration']['value'];
            $travelTimeMinutes = $duration / 60;
        }
    }

    // Generate tracking number and order number
    $trackingNumber = 'GDR-' . strtoupper(substr(uniqid(mt_rand(), true), -8));

    $validatedData['tracking_number'] = $trackingNumber;
    $validatedData['created_by'] = auth()->id();
    $currentYear = date('Y');
    $lastBooking = Booking::whereYear('created_at', $currentYear)->orderBy('order_number', 'desc')->first();

    $orderNumber = $lastBooking ? intval(explode('-', $lastBooking->order_number)[1]) + 1 : 1;
    $formattedOrderNumber = str_pad($orderNumber, 4, '0', STR_PAD_LEFT);
    $validatedData['order_number'] = $currentYear . '-' . $formattedOrderNumber;

    // Generate trip_ticket
    $lastTripTicket = Booking::whereYear('created_at', $currentYear)->orderBy('trip_ticket', 'desc')->first();
    $lastTicketNumber = 0;
    if ($lastTripTicket) {
        $tripTicketParts = explode('-', $lastTripTicket->trip_ticket);
        if (isset($tripTicketParts[1])) {
            $lastTicketNumber = intval($tripTicketParts[1]);
        }
    }
    $nextTicketNumber = str_pad($lastTicketNumber + 1, 4, '0', STR_PAD_LEFT);
    $tripTicket = $currentYear . '-' . $nextTicketNumber;
    $validatedData['trip_ticket'] = $tripTicket;

    // Create booking
    $booking = Booking::create($validatedData);

    // Generate QR code and save it
    $filename = time() . '-' . $trackingNumber . '.svg';
    $qrCodePath = 'qrcodes/' . $filename;
    $qrCodeImage = QrCode::size(300)->generate(route('rubixdetails', ['tracking_number' => $trackingNumber, 'order_number' => $validatedData['order_number']]));
    file_put_contents(public_path($qrCodePath), $qrCodeImage);
    $booking->update(['qr_code_path' => $qrCodePath]);

    // Truck status handling
    if ($truckId = $request->input('truck_type')) {
        $truck = Vehicle::find($truckId);
        if ($truck) {
            $truck->decrement('quantity');
            if ($truck->quantity <= 0) {
                $truck->update(['truck_status' => 'Not Available']);
            }
        }
    }

    // Redirect to confirmation page with QR code and tracking number
    return redirect()->route('confirmation')->with([
        'trackingNumber' => $trackingNumber,
        'orderNumber' => $validatedData['order_number'],
        'tripTicket' => $tripTicket, // Add trip ticket to the view data
        'qrCodeUrl' => asset($qrCodePath),
        'travelTimeMinutes' => $travelTimeMinutes,
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


  // In your controller method
  public function trackBooking(Request $request)
  {
      $trackingNumber = strtoupper($request->query('trackingNumber'));

      $booking = Booking::where('tracking_number', $trackingNumber)
          ->first(['merchant_address', 'product_name', 'date_of_pick_up', 'consignee_address', 'status', 'tracking_number']);

      if ($booking) {
          return view('Home.TrackBooking', [
              'product_name' => $booking->product_name,
              'merchant_address' => $booking->merchant_address,
              'status' => $booking->status,
              'consignee_address' => $booking->consignee_address,
              'date_of_pick_up' => $booking->date_of_pick_up,
              'trackingNumber' => $booking->tracking_number, // Pass tracking number to the view
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
public function updateStatus(Request $request, $id)
{
    // Validate and update the booking status
    $booking = Booking::find($id);
    $booking->update([
        'order_status' => $request->input('order_status'),
        'updated_by' => auth()->id(), // Assuming you have an updated_by field
    ]);

    // Create a new log entry
    Logs::create([
        'booking_id' => $booking->id,
        'user_id' => auth()->id(), // ID of the user performing the action
        'action' => 'Status updated to ' . $request->input('order_status'),
        'details' => 'Additional details if any',
    ]);

    // Redirect or return response
    return redirect()->back()->with('success', 'Status updated successfully.');
}

public function updateOrderStatus(Request $request, $id)
{
    // Validate the incoming request
    $validationRules = [
        'status' => 'required|string|in:Pod_returned,Delivery_successful,For_Pick-up,First_delivery_attempt,In_Transit',
        'remarks' => 'nullable|string',
        'proof_of_delivery' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    // Add date_of_pick_up validation only if status is 'For_Pick-up'
    if ($request->input('status') === 'For_Pick-up') {
        $validationRules['date_of_pick_up'] = 'required|date';
    }

    $request->validate($validationRules);

    // Find the booking by ID
    $booking = Booking::findOrFail($id);

    // Update the order status
    $booking->status = $request->input('status');

    // Update the date_of_pick_up if the status is 'For_Pick-up'
    if ($request->input('status') === 'For_Pick-up') {
        $booking->date_of_pick_up = $request->input('date_of_pick_up');
    }

    // Update the remarks if provided
    if ($request->filled('remarks')) {
        $booking->remarks = $request->input('remarks');
    }

    // Handle the picture upload if provided
    if ($request->hasFile('proof_of_delivery')) {
        $file = $request->file('proof_of_delivery');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('pictures'), $fileName);
        $booking->proof_of_delivery = 'pictures/' . $fileName;
    }

    // Save the booking updates
    $booking->save();

    // Send email if status is updated to 'Delivery_successful'
    if ($booking->status === 'Delivery_successful') {
        $consigneeEmail = $booking->consignee_email;
        $senderName = $booking->sender_name;
        $trackingNumber = $booking->tracking_number;
        Mail::to($consigneeEmail)->send(new OrderStatusUpdated($booking, $senderName, $trackingNumber));
    }

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Order updated successfully.');
}





public function updateAdminStatus(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'order_status' => 'required|string|in:Confirmed_delivery',
    ]);

    // Find the booking by ID
    $booking = Booking::findOrFail($id);

    // Get the consignee email
    $consigneeEmail = $booking->consignee_email;

    // Define the sender's name and tracking number
    $senderName = $booking->sender_name; // Ensure this field exists in your Booking model
    $trackingNumber = $booking->tracking_number; // Ensure this field exists in your Booking model

    // Update the status and the user who updated the booking
    $booking->order_status = $request->input('order_status');
    $booking->updated_by = auth()->id(); // Set the logged-in user's ID
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
            'proof_of_delivery' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
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
                $updated = $booking->update(['proof_of_delivery' => 'pictures/' . $fileName]);

                if ($updated) {
                    // Redirect back or to a specific route with success message
                    return redirect()->back()->with('success', 'Picture uploaded successfully.');
                } else {
                    return redirect()->back()->withErrors('Failed to update database.');
                }

            } catch (\Exception $e) {
                // Log the error message for debugging
                Log::error('File upload error: ' . $e->getMessage());
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

public function updateLocation(Request $request, $id)
{
    $request->validate([
        'location' => 'required|string|max:255',
    ]);

    $booking = Booking::findOrFail($id);
    $booking->location = $request->location; // Update 'location' field
    $booking->location_updated_by = auth()->user()->id; // Assuming you have this field
    $booking->location_updated_at = now(); // Assuming you have this field
    $booking->save();

    return redirect()->back()->with('success', 'Location updated successfully.');
}








}
