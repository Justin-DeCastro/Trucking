<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\User;
use App\Models\Employee;
use App\Models\Feedback;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $testimonials = Feedback::all();
        $employees = Employee::all();
        return view('Home.userhome',compact('employees','testimonials'));
    }
    public function ordertracking(){
        return view('Home.Ordertracking');
    }
    // In app/Http/Controllers/TruckLocationController.php
public function getLocation(Request $request)
{
    $trackingNumber = $request->query('tracking_number');

    // Fetch the truck's current location from your database
    $booking = Booking::where('tracking_number', $trackingNumber)->first(['latitude', 'longitude']);

    if ($booking) {
        return response()->json([
            'latitude' => $booking->latitude,
            'longitude' => $booking->longitude,
        ]);
    } else {
        return response()->json(['error' => 'Truck not found'], 404);
    }
}

    public function qrcode(){
        return view('Home.QRCode');
    }
    public function about(){
        $testimonials = Feedback::all();
        $employees = Employee::all();
        return view('Home.About',compact('employees','testimonials'));
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
