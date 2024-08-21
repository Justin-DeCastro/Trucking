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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
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
      
        foreach ($rubixdetails as $detail) {
            $detail->qr_code_url = asset($detail->qr_code);
        }
        return view('Admin.rubix_details', compact('rubixdetails'));
    }
    public function showMap()
{
    // Fetch a specific booking or relevant data
    $booking = Booking::find(88); // Adjust as needed to fetch the booking

    // Get the merchant and consignee addresses from the booking
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
    public function accounting_dash(){

        $transactions = Transaction::all();
        $totalDeposit = Transaction::all();
        $totalWithdraw = $transactions->sum('withdraw_amount');
        $outstandingBalance = $transactions->sum('deposit_amount');
        $totalExpense = $transactions->sum('expense_amount');
        $netIncome = $outstandingBalance - $totalWithdraw;
        return view('Accounting.Accountingdash',compact('outstandingBalance','totalWithdraw','totalExpense','netIncome'));
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

    return view('Admin.ManageCourierOrder', compact('bookings', 'drivers'));
}




public function addtruck(){
    $vehicles = Vehicle::all();
    return view('Admin.Addtruck',compact('vehicles'));
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

}

