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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Count the total number of bookings
        $totalBookings = Booking::count();


        $today = Carbon::today();
        $formattedDate = $today->format('F j, Y');


        $todayBookings = Booking::whereDate('created_at', $today)->count();


        $deliverySuccessfulCount = Booking::where('status', 'Delivery successful')->count();


        $totalAvailableTrucks = Vehicle::sum('quantity');
        $totalCouriers = User::where('role', 'courier')->count();

        return view('Admin.dashboard', compact('totalBookings', 'todayBookings', 'formattedDate', 'deliverySuccessfulCount', 'totalAvailableTrucks','totalCouriers'));
    }

     public function waybill(){
        $vehicles = Vehicle::all();
        return view('Admin.Waybill',compact('vehicles'));
    }
    public function showDetails($id)
    {
        $detail = Booking::findOrFail($id); // Fetch the record based on the ID

        return view('Admin.show', compact('detail'));
    }
    public function rubix_details()
    {
        $rubixdetails = Booking::all();

        return view('Admin.rubix_details', compact('rubixdetails'));
    }
    public function create_driver()
    {
        $rubixdetails = Booking::all();

        return view('Admin.createDriver', compact('rubixdetails'));
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
    public function courier_dash(){
        return view('Admin.Courierdash');
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
    // Get the start and end dates for the current month
    $startOfMonth = Carbon::now()->startOfMonth();
    $endOfMonth = Carbon::now()->endOfMonth();

    // Retrieve records from RatePerMile that fall within the current month
    $rates = RatePerMile::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();

    // Group records by date
    $dailyTotals = $rates->groupBy(function ($rate) {
        return Carbon::parse($rate->created_at)->format('M j, Y'); // Group by date
    })->map(function ($group) {
        return $group->sum(function ($rate) {
            return ($rate->rate_per_mile * $rate->km) - $rate->operational_costs;
        });
    });

    // Calculate the grand total for the current month
    $overallTotal = $dailyTotals->sum();

    // Pass data to the view
    return view('Accounting.Monthly-inhouse', [
        'dailyTotals' => $dailyTotals,
        'overallTotal' => $overallTotal,
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

}

