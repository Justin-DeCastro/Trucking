<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProofPayment;
class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'subcontractor_id' => 'required|string|unique:subcontractors,subcontractor_id|max:255',
            'contact_first_name' => 'required|string|max:255',
            'contact_last_name' => 'required|string|max:255',
            'email_address' => 'required|email|unique:subcontractors,email_address|max:255',
            'phone_number' => 'required|string|max:20',
            'file_upload' => 'required|file|mimes:pdf,docx,jpg,png|max:2048',
        ]);

        $file = $request->file('file_upload');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);

        ProofPayment::create([
            'company_name' => $request->company_name,
            'subcontractor_id' => $request->subcontractor_id,
            'contact_first_name' => $request->contact_first_name,
            'contact_last_name' => $request->contact_last_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'file_upload' => 'uploads/' . $fileName, // Store the file path relative to the public directory
        ]);

        return redirect()->back()->with('success', 'Subcontractor created successfully.');
    }
}
