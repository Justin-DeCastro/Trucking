<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcontractor;
class SubcontractorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'subcontractor_id' => 'required',
            'full_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email_address' => 'required',
            'plate_number' => 'required',
            'truck_capacity' => 'required',
            'phone_number' => 'required|string|max:20',
            'file_upload' => 'required|file|mimes:pdf,docx,jpg,png|max:2048',
        ]);

        // Handle file upload
        $file = $request->file('file_upload');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);

        // Create the subcontractor
        Subcontractor::create([
            'company_name' => $request->company_name,
            'subcontractor_id' => $request->subcontractor_id,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'truck_capacity' => $request->truck_capacity,
            'plate_number'=> $request->plate_number,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'file_upload' => 'uploads/' . $fileName, // Store the file path relative to the public directory
        ]);

        return redirect()->back()->with('success', 'Subcontractor created successfully.');
    }
}
