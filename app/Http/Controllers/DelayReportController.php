<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\DelayReport;
use Illuminate\Http\Request;

class DelayReportController extends Controller
{
    // Show the form for creating a new delay report
    public function create()
    {
        $users = \App\Models\User::all(); // Fetch all users for driver selection
        return view('Admin.DelayReport', compact('users'));
    }

    // Store a newly created delay report in storage


    public function store(Request $request)
{
    $validated = $request->validate([
        'trip_ticket' => 'required|string|max:255',
        'driver_name' => 'required|string', // This might not be necessary if you set it in the form
        'plate_number' => 'required|string|max:255',
        'date' => 'required|date',
        'delay_duration' => 'required|string',
        'delay_cause' => 'required|string',
        'additional_notes' => 'nullable|string',
    ]);

    // Remove this line if you're capturing the driver's name from the form
    // $validated['driver_name'] = auth()->user()->name;

    $delayReport = DelayReport::create($validated);

    return redirect()->back()->with('success', 'Delay report submitted successfully.');
}

}


