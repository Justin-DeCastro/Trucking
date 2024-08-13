<?php

namespace App\Http\Controllers;
use App\Models\ManageBranch;
use App\Models\BranchManager;
use App\Models\Booking;
use App\Models\Driver;
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
        return view('Admin.Accountingdash');
    }
    public function add_driver(){
        $drivers = Driver::all();
        return view('Admin.AddDriver',compact('drivers'));
    }
    public function manage_appointment(){
        $drivers = Driver::all();
        $bookings = Booking::all(); 
        return view('Admin.ManageAppointment',compact('bookings','drivers'));
    }
}

