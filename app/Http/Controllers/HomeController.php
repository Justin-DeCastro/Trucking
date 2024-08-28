<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $employees = Employee::all();
        return view('Home.userhome',compact('employees'));
    }
    public function ordertracking(){
        return view('Home.Ordertracking');
    }
    public function qrcode(){
        return view('Home.QRCode');
    }
    public function about(){
        return view('Home.About');
    }
    public function faq(){
        return view('Home.Faq');
    }
    public function service(){
        return view('Home.Service');
    }
    public function team(){
        return view('Home.Team');
    }
    public function blog(){
        return view('Home.Blog');
    }
    public function contact(){
        return view('Home.Contact');
    }
    public function appointment()
    {
        $users = User::where('role', 'courier')->get();

        $vehicles = Vehicle::where('truck_status', 'Available')->get();

        return view('Home.Appointment', compact('vehicles','users'));
    }

}
