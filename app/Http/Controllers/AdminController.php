<?php

namespace App\Http\Controllers;
use App\Models\ManageBranch;
use App\Models\BranchManager;
use App\Models\Booking;
use App\Models\Driver;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Transaction;
use App\Models\Subcontractor;
use App\Models\PricingSalary;
use App\Models\Preventive;
use App\Models\Feedback;
use App\Models\RatePerMile;
use App\Models\ActivityLog;
use App\Models\Loan;
use App\Models\ReturnItem;
use App\Models\Budget;
use App\Models\Receivable;
use App\Models\Location;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Get the current logged-in user ID
        $currentUserId = auth()->id();

        // Count the total number of bookings
        $totalBookings = Booking::count();

        $today = Carbon::today();
        $formattedDate = $today->format('F j, Y');

        $todayBookings = Booking::whereDate('created_at', $today)->count();

        // Count of different statuses in Booking
        $outboundTruck = Booking::whereIn('status', ['For_Pick-up', 'First_delivery_attempt', 'In_Transit'])->count();
        $inboundTruck = Booking::whereIn('status', ['Delivery_successful'])->count();
        $MaintenanceTruck = Vehicle::whereIn('truck_status', ['maintenance'])->count();
        $deliverySuccessfulCount = Booking::where('status', 'Delivery successful')->count();

        // Count of available trucks and couriers
        $totalAvailableTrucks = Vehicle::sum('quantity');
        $totalCouriers = User::where('role', 'courier')->count();

        // Get couriers' license expiration dates
        $couriers = User::where('role', 'courier')->get(['name', 'license_expiration']);

        // Fetch the latest location for each booking and get driver names
        $latestLocations = Booking::select('bookings.id', 'bookings.location', 'bookings.driver_name', 'users.name as driver_name')
        ->leftJoin('users', 'bookings.driver_name', '=', 'users.id')
        ->whereIn('bookings.id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('bookings')
                ->groupBy('id');
        })
        ->where('bookings.order_status', '!=', 'Confirmed_delivery') // Exclude 'Confirmed_delivery' status
        ->get();

    $locationsWithAddresses = [];

    foreach ($latestLocations as $booking) {
        // Use the booking's location field (assuming it's a formatted address)
        $address = $booking->location;

        // Get the driver name directly from the join
        $driverName = $booking->driver_name;

        // Add the location and creator (driver name) to the array
        $locationsWithAddresses[] = [
            'id' => $booking->id,
            'address' => $address,
            'creator' => $driverName ? $driverName : 'Unknown'
        ];
    }

    // Pass the locationsWithAddresses to the view



        return view('Admin.dashboard', compact(
            'totalBookings',
            'outboundTruck',
            'inboundTruck',
            'todayBookings',
            'formattedDate',
            'deliverySuccessfulCount',
            'totalAvailableTrucks',
            'totalCouriers',
            'couriers',
            'locationsWithAddresses',
            'MaintenanceTruck'
        ));
    }






     public function waybill(){
        $vehicles = Vehicle::all();
        return view('Admin.Waybill',compact('vehicles'));
    }
    public function requestbudget()
    {
        // Get the currently authenticated user
        $user = auth()->id();

        // Fetch all budget details
        $budgets = Budget::all();

        // Pass the data to the view
        return view('Accounting.AdminRequest', compact('budgets', 'user'));
    }

    public function showDetails($id)
    {
        $detail = Booking::findOrFail($id); // Fetch the record based on the ID

        return view('Admin.show', compact('detail'));
    }
    public function rubix_details()
    {
        // Get the currently authenticated user
        $user = auth()->user();
        $userId = $user ? $user->id : null;

        // Fetch all booking details with driver information
        $rubixdetails = Booking::with('driver')->get();

        // Fetch activity logs related to the currently authenticated user
        $activityLogs = ActivityLog::where('user_id', $userId)->get();

        // Log the user's activity
        if ($user) {
            ActivityLog::log($user->id, 'Viewed rubix details page');
        }

        // Fetch all activity logs for the booking model (if needed)
        $activity_logs = Booking::with('activityLogs')->get();

        // Pass the data to the view
        return view('Admin.rubix_details', compact('rubixdetails', 'activityLogs', 'activity_logs'));
    }


    public function logStatusUpdate(Request $request, $id)
{
    $detail = Booking::findOrFail($id);

    // Update the status
    $detail->order_status = $request->input('order_status');
    $detail->save();

    // Log the activity
    ActivityLog::create([
        'user_id' => auth()->id(),
        'action' => 'updated',
        'description' => 'Updated order status to ' . $request->input('order_status') . ' for tracking number ' . $detail->tracking_number,
    ]);

    return redirect()->back()->with('success', 'Status updated successfully!');
}

    public function booking_details()
    {
        $rubixdetails = Booking::all();

        return view('Admin.booking_details', compact('rubixdetails'));
    }
    public function create_driver()
    {
        $rubixdetails = Booking::all();

        return view('Admin.createDriver', compact('rubixdetails'));
    }

    public function return_items()
    {
        // Get the ID of the currently logged-in user
        $currentUserId = auth()->id();

        // Fetch return items and include the driver relation
        $returnItems = ReturnItem::with('driver')->get();

        // Fetch the logged-in user only if they are a 'courier'
        $currentDriver = User::where('id', $currentUserId)->where('role', 'courier')->first();

        // Pass the current driver's name to the view
        return view('Admin.ReturnItems', [
            'returnItems' => $returnItems,
            'currentDriverName' => $currentDriver ? $currentDriver->name : 'No driver'
        ]);
    }

    public function showMap()
{
    // Fetch a specific booking or relevant data
    $booking = Booking::find(88); // Adjust as needed to fetch the booking


    $merchantAddress = $booking->merchant_address;
    $consigneeAddress = $booking->consignee_address;

    return view('map', [
        'merchantAddress' => $merchantAddress,
        'consigneeAddress' => $consigneeAddress
    ]);
}
    public function adminside(){
        return view('Admin.Admin');
    }
    public function reference(){
        $senderNames = DB::table('bookings')
        ->select('sender_name')
        ->distinct()
        ->pluck('sender_name');
        $vehicles = Vehicle::where('truck_status', 'Available')->get();
        $subcontractors = Subcontractor::all();
        $users = User::where('role', 'courier')->get();
        return view('Admin.ReferenceForm',compact('users','vehicles','senderNames','subcontractors'));
    }
    public function reference_form(){
        $senderNames = DB::table('bookings')
        ->select('sender_name')
        ->distinct()
        ->pluck('sender_name');
        $vehicles = Vehicle::where('truck_status', 'Available')->get();
        $subcontractors = Subcontractor::all();
        $users = User::where('role', 'courier')->get();
        return view('Admin.reference-form',compact('users','vehicles','senderNames','subcontractors'));
    }
    public function managebranch(){
        $branches = ManageBranch::all();
        return view('Admin.Managebranch',compact('branches'));
    }
    public function branchmanager(){
        $branchmanager = BranchManager::all();
        return view('Admin.Branchmanager',compact('branchmanager'));
    }
    public function branch_income(){
        return view('Admin.Branchincome');
    }
    public function manage_courier(){
        return view('Admin.ManageCourier');
    }
    public function staff_list(){
        return view('Admin.StaffList');
    }
    public function customer_list(){
        return view('Admin.CustomerList');
    }
    public function manage_unit(){
        return view('Admin.ManageUnit');
    }
    public function addsubcon(){
        $subcon = Subcontractor::all();
        return view('Admin.AddSubCon',compact('subcon'));
    }
    public function manage_type(){
        return view('Admin.Managetype');
    }
    public function pending_ticket(){
        return view('Admin.PendingTicket');
    }
    public function closed_ticket(){
        return view('Admin.ClosedTicket');
    }
    public function answered_ticket(){
        return view('Admin.AnsweredTicket');
    }
    public function all_ticket(){
        return view('Admin.AllTicket');
    }
    // In your Controller
// In your Controller
public function courier_dash()
{
    $currentUserId = auth()->id();

    // Fetch the license expiration for the logged-in user
    $expiringCourier = User::where('id', $currentUserId)
        ->whereBetween('license_expiration', [Carbon::now(), Carbon::now()->addDays(7)])
        ->first(['name', 'license_number', 'license_expiration', 'driver_license']); // Add required fields

    $totalBookings = Booking::where('driver_name', $currentUserId)->count(); // Total bookings

    $totalSuccessfulDeliveries = Booking::where('driver_name', $currentUserId)
        ->where('order_status', 'Confirmed_delivery')
        ->count(); // Total successful deliveries

    // Fetch delivery routes and driver salary from PicingSalary
    $deliverySalaries = DB::table('pricing_salaries')
        ->select('delivery_routes', 'driver_salary')
        ->get()
        ->mapWithKeys(function ($item) {
            return [strtoupper($item->delivery_routes) => $item->driver_salary];
        }); // Normalize delivery_routes to uppercase

    // Calculate total earnings based on booking consignee addresses where order_status is 'Confirmed_delivery'
    $totalEarnings = Booking::where('driver_name', $currentUserId)
        ->where('order_status', 'Confirmed_delivery') // Only consider confirmed deliveries
        ->whereNotNull('consignee_address') // Ensure consignee_address is not null
        ->get()
        ->reduce(function ($carry, $booking) use ($deliverySalaries) {
            $route = strtoupper($booking->consignee_address); // Normalize consignee_address to uppercase

            // Check if the consignee_address matches any delivery_routes (partial match)
            foreach ($deliverySalaries as $deliveryRoute => $salary) {
                if (stripos($route, $deliveryRoute) !== false) {
                    // Apply 2% reduction to driver_salary
                    return $carry + ($salary * 0.98);
                }
            }

            return $carry;
        }, 0); // Initial value for carry is 0

    return view('Admin.Courierdash', compact('totalBookings', 'totalSuccessfulDeliveries', 'expiringCourier', 'totalEarnings'));
}


public function storeDriverLicenseDetails(Request $request)
{
    // Validate the input
    $request->validate([
        'license_number' => 'required|string|max:255',
        'license_expiration' => 'required|date|after:today',
        'driver_license' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Get the authenticated user (courier)
    $courier = Auth::user();

    if (!$courier) {
        return redirect()->back()->with('error', 'Courier not found.');
    }

    // Prepare data for update
    $data = [
        'license_number' => $request->license_number,
        'license_expiration' => $request->license_expiration,
    ];

    // Check if a new file is uploaded and add it to the update data
    if ($request->hasFile('driver_license')) {
        // Get the uploaded file
        $file = $request->file('driver_license');

        // Define the path where you want to store the file
        $destinationPath = public_path('licenses'); // Public path 'licenses' folder

        // Create the 'licenses' directory if it does not exist
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Generate a unique filename to avoid conflicts
        $filename = time() . '-' . $file->getClientOriginalName();

        // Move the file to the public 'licenses' directory
        $file->move($destinationPath, $filename);

        // Store the relative path in the database
        $data['driver_license'] = 'licenses/' . $filename;
    }

    // Update the user with the data
    $courier->fill($data);
    $courier->save();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Driver license details updated successfully.');
}

public function confirmation()
{
    // Retrieve the variables from the session
    $trackingNumber = session('trackingNumber');
    $qrCodeUrl = session('qrCodeUrl');

    // Check if the required session data is available
    if (!$trackingNumber || !$qrCodeUrl) {
        // Redirect back or show an error page if session data is missing
        return redirect()->route('home')->with('error', 'Session data is missing. Please try again.');
    }

    return view('Home.confirmation', compact('trackingNumber', 'qrCodeUrl'));
}



public function coordinatordash()
{
    // Get the current logged-in user ID
    $currentUserId = auth()->id();

    // Fetch new backload bookings from today with location and driver data
    $newBackloadBookings = Booking::select('bookings.id', 'bookings.delivery_type', 'bookings.created_at', 'bookings.location', 'users.name as driver_name')
        ->join('users', 'bookings.driver_name', '=', 'users.id')
        ->where('bookings.delivery_type', 'Backload')
        ->whereDate('bookings.created_at', Carbon::today())
        ->orderBy('bookings.created_at', 'desc')
        ->get();

    // Fetch couriers whose licenses are expiring soon
    $expiringCouriers = User::where('role', 'courier')
        ->whereBetween('license_expiration', [Carbon::now(), Carbon::now()->addDays(7)])
        ->get(['name', 'license_expiration']);

    // Get bookings with locations and driver names
    $bookingsWithLocations = Booking::select('bookings.id', 'bookings.location', 'users.name as driver_name')
        ->join('users', 'bookings.driver_name', '=', 'users.id')
        ->whereNotNull('bookings.location')
        ->get();

    // Get plate numbers with fewer than 5 bookings and their total count
    $plateNumbersWithFewBookings = Booking::select('plate_number')
        ->selectRaw('COUNT(*) as booking_count')
        ->groupBy('plate_number')
        ->having('booking_count', '<', 5)
        ->get();

    // Get the latest booking for each unique booking id
    $latestBookings = Booking::select('bookings.id', 'bookings.location', 'bookings.driver_name', 'users.name as driver_name')
        ->join('users', 'bookings.driver_name', '=', 'users.id')
        ->whereIn('bookings.id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('bookings')
                ->groupBy('id');
        })
        ->get();

    // Prepare the data for the view
    $locationsWithAddresses = [];

    foreach ($latestBookings as $booking) {
        $address = $booking->location;
        $driverName = $booking->driver_name;

        $locationsWithAddresses[] = [
            'id' => $booking->id,
            'address' => $address,
            'creator' => $driverName ? $driverName : 'Unknown'
        ];
    }

    // Return view with the necessary data
    return view('Admin.Coordinatordash', [
        'expiringCouriers' => $expiringCouriers,
        'bookingsWithLocations' => $bookingsWithLocations,
        'newBackloadBookings' => $newBackloadBookings,
        'plateNumbersWithFewBookings' => $plateNumbersWithFewBookings,
        'locationsWithAddresses' => $locationsWithAddresses,
    ]);
}



    public function getNewBackloadBookings()
    {
        $today = Carbon::today(); // Get the start of today
        $endOfDay = Carbon::today()->endOfDay(); // Get the end of today

        $newBookings = DB::table('bookings')
            ->where('delivery_type', 'Backload')
            ->whereBetween('created_at', [$today, $endOfDay])
            ->get();

        return $newBookings;
    }

    public function coordinatorReturnItems(){
        $currentUserId = auth()->id();

        // Fetch return items and include the driver relation
        $returnItems = ReturnItem::with('driver')->get();

        // Fetch the logged-in user only if they are a 'courier'
        $currentDriver = User::where('id', $currentUserId)->where('role', 'courier')->first();

        // Pass the current driver's name to the view
        return view('Admin.CoordinatorReturnItems', [
            'returnItems' => $returnItems,
            'currentDriverName' => $currentDriver ? $currentDriver->name : 'No driver'
        ]);
    }
    public function accounting_dash()
{
    $totalrequestBudget = Budget::count();
    $totalreceivables = Receivable::count();
    // Fetch all transactions from the database
    $transactions = Transaction::all();
    $paidStatus = Loan::whereIn('status', ['Paid'])->count();
    $unpaidStatus = Loan::whereIn('status', ['UnPaid'])->count();
    $MaintenanceTruck = Vehicle::whereIn('truck_status', ['maintenance'])->count();
    // Calculate total deposit and withdrawal amounts
    $totalDeposit = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    // $totalExpense = $transactions->sum('withdraw_amount');

    // Calculate net income
    // $netIncome = $totalDeposit - $totalWithdraw - $totalExpense;

    // Pass the computed values to the view
    return view('Accounting.Accountingdash', compact('totalDeposit', 'totalWithdraw','MaintenanceTruck' ,'totalreceivables','totalrequestBudget','paidStatus','unpaidStatus'));
}

    public function destroy($id)
    {
        // Find the courier by ID
        $courier = User::findOrFail($id);

        // Delete the courier
        $courier->delete();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Courier deleted successfully.');
    }
    public function add_driver(){
        $bookings = Booking::all();
        $couriers = User::where('role', 'courier')->get();
        return view('Admin.AddDriver',compact('couriers','bookings'));
    }
    public function manage_appointment(){
        $drivers = User::where('role', 'courier')->get(); // Get only couriers
        $bookings = Booking::all();
        return view('Admin.ManageAppointment',compact('bookings','drivers'));
    }
//     public function manage_appointment()
// {
//     $drivers = User::where('role', 'courier')->get(); // Get only couriers
//     $bookings = Booking::with('driver')->get(); // Eager load the driver relationship
//     return view('Admin.ManageAppointment', compact('bookings', 'drivers'));
// }

public function courier_order()
{
    $drivers = User::where('role', 'courier')->get(); // Get all couriers (if needed elsewhere)

    // Get the logged-in user
    $currentCourier = Auth::user(); // Ensure that user is logged in and has 'courier' role

    // Fetch bookings assigned to the logged-in courier
    $bookings = Booking::where('driver_name', $currentCourier->id)->get();
    $orders = Booking::all();
    return view('Admin.ManageCourierOrder', compact('bookings', 'drivers','orders'));
}


public function addtruck_archived(){
    $vehicles = Vehicle::all();
    return view('Admin.Addtruck',compact('vehicles'));
}

public function addtruck(){

    $vehicles = Vehicle::all();
    return view('Admin.Addtruck',compact('vehicles'));
}
public function feedback(){
    $feedbacks = Feedback::all();
    return view('Admin.Feedback',compact('feedbacks'));
}


public function salary()
{
    $user = auth()->user();
    $userId = $user ? $user->id : null;

    // Fetch all booking details

    // Fetch today's activity logs related to the currently authenticated user
    $activityLogs = ActivityLog::where('user_id', $userId)
        ->whereDate('created_at', Carbon::today()) // Get logs for today
        ->get();

    // Log the user's activity
    if ($user) {
        ActivityLog::log($user->id, 'Viewed Salary page');
    }

    // Fetch all activity logs for the booking model (if needed)
    $activity_logs = Booking::with('activityLogs')->get();

    // Retrieve records grouped by ID with salary details
    $salariesById = DB::table('pricing_salaries')
        ->select('ID', 'delivery_routes', 'driver_salary', 'helper_salary')
        ->get();

    // Initialize an array to hold per-ID salary computations
    $computedSalaries = [];

    // Iterate through each record and compute as needed
    foreach ($salariesById as $record) {
        $id = $record->ID;
        $deliveryRoutes = $record->delivery_routes;
        $driverSalary = $record->driver_salary;
        $helperSalary = $record->helper_salary;

        // Compute total salary or other needed calculations per ID
        $totalSalary = $driverSalary + $helperSalary;

        // Store computed values in the array
        $computedSalaries[$id] = [
            'delivery_routes' => $deliveryRoutes,
            'driver_salary' => $driverSalary,
            'helper_salary' => $helperSalary,
            'total_salary' => $totalSalary
        ];
    }

    // Pass the data to the view
    return view('Admin.Salary', compact('computedSalaries', 'activityLogs'));
}

public function preventive(Request $request) {
    // Get the selected plate number from the request
    $plateNumber = $request->input('plate_number');

    // Fetch distinct plate numbers for the dropdown
    $plateNumbers = Booking::pluck('plate_number')->unique();

    // Filter preventive maintenance records based on the selected plate number
    $preventive = $plateNumber
        ? Preventive::where('plate_number', $plateNumber)->get()
        : Preventive::all();

    // Return the view with preventive records and plate numbers
    return view('Admin.PMS', compact('preventive', 'plateNumbers'));
}

public function ratepermile(Request $request)
{
    // Fetch all distinct plate numbers from the 'bookings' table
    $plateNumbers = Booking::distinct()->pluck('plate_number');

    // Retrieve the plate_number from the request (if filtering by a specific plate_number)
    $selectedPlateNumber = $request->input('plate_number');

    // Create a query for fetching rate_per_mile data grouped by plate_number
    $query = RatePerMile::with('booking') // Use Eloquent relationship if you have one defined
        ->select('plate_number', 'rate_per_mile', 'date', 'km', 'operational_costs','proof_of_payment')
        ->distinct(); // Ensure distinct rows

    // If a specific plate_number is selected, filter the query
    if ($selectedPlateNumber) {
        $query->where('plate_number', $selectedPlateNumber);
    }

    // Get the results and group them by plate_number
    $rates = $query->get()->groupBy('plate_number');

    // Pass data to the view
    return view('Accounting.In-house', compact('rates', 'plateNumbers', 'selectedPlateNumber'));
}


public function ratepermonth(Request $request)
{
    // Fetch all records from RatePerMile
    $rates = RatePerMile::all();

    // Pass data to the view
    return view('Accounting.Monthly-inhouse', [
        'rates' => $rates,
    ]);
}


public function rateperyear(Request $request)
{
    // Get the start and end dates of the current year
    $rates = RatePerMile::all();

    // Group records by month and year
    $monthlyTotals = $rates->groupBy(function ($date) {
        return Carbon::parse($date->created_at)->format('F Y'); // Group by month and year
    })->map(function ($group) {
        return $group->sum(function ($rate) {
            return ($rate->rate_per_mile * $rate->km) - $rate->operational_costs;
        });
    });

    // Calculate the grand total for all available data
    $yearlyTotal = $monthlyTotals->sum();

    // Pass data to the view
    return view('Accounting.Yearly-inhouse', [
        'monthlyTotals' => $monthlyTotals,
        'yearlyTotal' => $yearlyTotal,
    ]);
}
public function calendar(){
    $interviews = Booking::all(); // Assuming you need this as well
    $loans = Loan::where('status', 'Unpaid')->get(); // Fetch only loans with pending status
    return view('admin.calendar', compact('interviews', 'loans'));
 }
 public function calendar_acc() {
    $interviews = Booking::all(); // Assuming you need this as well
    $loans = Loan::where('status', 'Unpaid')->get(); // Fetch only loans with pending status
    return view('admin.Calendar-acc', compact('interviews', 'loans'));
}

}

