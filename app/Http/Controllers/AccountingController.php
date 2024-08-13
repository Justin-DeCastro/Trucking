<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
class AccountingController extends Controller
{
    public function accounting_dash(){
        return view('Accounting.Accountingdash');
    }
    public function all_courier(){
        return view('Accounting.AllCourier');
    }
    public function send_courier(){
        return view('Accounting.SendCourier');
    }
    public function branch_list(){
        return view('Accounting.BranchList');
    }
    public function cash_collection(){
        $drivers = User::where('role', 'courier')->get(); // Get only couriers
        $bookings = Booking::all(); 
        return view('Accounting.CashCollection',compact('drivers','bookings'));
    }
    public function delivery_queue(){
        return view('Accounting.BranchList');
    }
    public function sentin_queue(){
        return view('Accounting.SentInQueue');
    }
    public function total_delivered(){
        return view('Accounting.TotalDelivered');
    }
    public function shipping_courier(){
        return view('Accounting.ShippingCourier');
    }
    public function total_sent(){
        return view('Accounting.TotalSent');
    }
}
