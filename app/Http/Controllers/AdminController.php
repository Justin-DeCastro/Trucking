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
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function adminside(){
        return view('Admin.Admin');
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
        $netIncome = $totalDeposit - $totalWithdraw;
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
    $bookings = Booking::where('driver_id', $currentCourier->id)->get();

    return view('Admin.ManageCourierOrder', compact('bookings', 'drivers'));
}
public function addtruck(){
    $vehicles = Vehicle::all(); 
    return view('Admin.Addtruck',compact('vehicles'));
}
}

