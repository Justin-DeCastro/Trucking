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

    $outboundTruck = Booking::whereIn('status', ['For_Pick-up', 'First_delivery_attempt', 'In_Transit'])->count();
    $inboundTruck = Booking::whereIn('status', ['Delivery_successful'])->count();

    $deliverySuccessfulCount = Booking::where('status', 'Delivery successful')->count();

    $totalAvailableTrucks = Vehicle::sum('quantity');
    $totalCouriers = User::where('role', 'courier')->count();

    // Get couriers' license expiration dates
    $couriers = User::where('role', 'courier')->get(['name', 'license_expiration']);

    // Fetch the latest location for each user
    $latestLocations = Location::select('user_id', 'latitude', 'longitude')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('locations')
                ->groupBy('user_id');
        })
        ->get();

    // Define your Google Maps API key
    $apiKey = 'AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4';

    // Initialize an empty array to store the locations with addresses
    $locationsWithAddresses = [];

    foreach ($latestLocations as $location) {
        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
            'latlng' => "{$location->latitude},{$location->longitude}",
            'key' => $apiKey
        ]);

        $data = $response->json();

        // Extract address from the API response
        $address = $data['results'][0]['formatted_address'] ?? 'Address not found';

        // Get the user's name
        $user = User::find($location->user_id);

        $locationsWithAddresses[] = [
            'latitude' => $location->latitude,
            'longitude' => $location->longitude,
            'address' => $address,
            'creator' => $user ? $user->name : 'Unknown'
        ];
    }

    return view('Admin.dashboard', compact(
        'totalBookings',
        'outboundTruck',
        'inboundTruck',
        'todayBookings',
        'formattedDate',
        'deliverySuccessfulCount',
        'totalAvailableTrucks',
        'totalCouriers',
        'couriers', // Pass couriers with license expiration to the view
        'locationsWithAddresses' // Pass locations with addresses to the view
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

    // Fetch all booking details
    $rubixdetails = Booking::all();

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
        $vehicles = Vehicle::where('truck_status', 'Available')->get();
        $users = User::where('role', 'courier')->get();
        return view('Admin.ReferenceForm',compact('users','vehicles'));
    }
    public function reference_form(){
        $vehicles = Vehicle::where('truck_status', 'Available')->get();
        $users = User::where('role', 'courier')->get();
        return view('Admin.reference-form',compact('users','vehicles'));
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
    $totalBookings = Booking::where('driver_name', $currentUserId)->count(); // Total bookings

    $totalSuccessfulDeliveries = Booking::where('driver_name', $currentUserId)
        ->where('order_status', 'Confirmed_delivery')
        ->count(); // Total successful deliveries

    return view('Admin.Courierdash', compact('totalBookings', 'totalSuccessfulDeliveries'));
}


    public function coordinatordash(){
        // Get the current logged-in user ID
        $currentUserId = auth()->id();

        // Fetch couriers
        $couriers = User::where('role', 'courier')->get(['name', 'license_expiration']);

        // Fetch the latest location for each user
        $latestLocations = Location::select('user_id', 'latitude', 'longitude')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('locations')
                    ->groupBy('user_id');
            })
            ->get();

        // Define your Google Maps API key
        $apiKey = 'AIzaSyCUlV2s9XbLAsllvpPnFoxkznXbdFqUXK4';

        // Initialize an empty array to store the locations with addresses
        $locationsWithAddresses = [];

        foreach ($latestLocations as $location) {
            $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
                'latlng' => "{$location->latitude},{$location->longitude}",
                'key' => $apiKey
            ]);

            $data = $response->json();

            // Extract address from the API response
            $address = $data['results'][0]['formatted_address'] ?? 'Address not found';

            // Get the user's name
            $user = User::find($location->user_id);

            $locationsWithAddresses[] = [
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
                'address' => $address,
                'creator' => $user ? $user->name : 'Unknown'
            ];
        }

        return view('Admin.Coordinatordash', compact('couriers', 'locationsWithAddresses'));
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
    // Fetch all transactions from the database
    $transactions = Transaction::all();

    // Calculate total deposit and withdrawal amounts
    $totalDeposit = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    // $totalExpense = $transactions->sum('withdraw_amount');

    // Calculate net income
    // $netIncome = $totalDeposit - $totalWithdraw - $totalExpense;

    // Pass the computed values to the view
    return view('Accounting.Accountingdash', compact('totalDeposit', 'totalWithdraw',  ));
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
    // Retrieve records grouped by ID with salary details
    $salariesById = DB::table('pricing_salaries')
        ->select('ID','delivery_routes', 'driver_salary', 'helper_salary')
        ->get();

    // Initialize an array to hold per-ID salary computations
    $computedSalaries = [];

    // Iterate through each record and compute as needed
    foreach ($salariesById as $record) {
        $id = $record->ID;
        $deliveryRoutes= $record->delivery_routes;
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
    return view('Admin.Salary', compact('computedSalaries'));
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
    // Fetch all distinct plate numbers
    $plateNumbers = DB::table('bookings')->distinct()->pluck('plate_number');

    // Retrieve the plate_number from the request (if filtering by a specific plate_number)
    $selectedPlateNumber = $request->input('plate_number');

    // Fetch rate_per_mile data grouped by plate_number
    $query = DB::table('rate_per_miles')
        ->join('bookings', 'rate_per_miles.plate_number', '=', 'bookings.plate_number')
        ->select('rate_per_miles.plate_number', 'rate_per_miles.rate_per_mile', 'rate_per_miles.date','rate_per_miles.km', 'rate_per_miles.operational_costs')
        ->distinct(); // Ensure distinct rows

    // If a specific plate_number is selected, filter the query
    if ($selectedPlateNumber) {
        $query->where('rate_per_miles.plate_number', $selectedPlateNumber);
    }

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
    $interviews = Booking::all();
    return view('admin.calendar',compact('interviews'));
 }
 public function calendar_acc() {
    $interviews = Booking::all(); // Assuming you need this as well
    $loans = Loan::where('status', 'Unpaid')->get(); // Fetch only loans with pending status
    return view('admin.Calendar-acc', compact('interviews', 'loans'));
}

}

