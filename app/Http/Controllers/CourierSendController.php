<?php

namespace App\Http\Controllers;
use App\Models\CourierSend;
use Illuminate\Http\Request;

class CourierSendController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Senderfirstname' => 'required|string|max:255',
            'Senderlastname' => 'required|string|max:255',
            'Senderemail' => 'required|email|max:255',
            'Senderphone' => 'required|string|max:15',
            'Senderaddress' => 'required|string|max:255',
            'Sendercity' => 'required|string|max:255',
            'Senderstate' => 'required|string|max:255',
            'Receiverfirstname' => 'required|string|max:255',
            'Receiverlastname' => 'required|string|max:255',
            'Receiveremail' => 'required|email|max:255',
            'Receiverphone' => 'required|string|max:15',
            'Receiveraddress' => 'required|string|max:255',
            'Receivercity' => 'required|string|max:255',
            'Receiverstate' => 'required|string|max:255',
            
        ]);

        CourierSend::create([
            'Senderfirstname' => $request->Senderfirstname,
            'Senderlastname' => $request->Senderlastname,
            'Senderemail' => $request->Senderemail,
            'Senderphone' => $request->Senderphone,
            'Senderaddress' => $request->Senderaddress,
            'Sendercity' => $request->Sendercity,
            'Senderstate' => $request->Senderstate,
           
        ]);

        return redirect()->back()->with('success', 'Branch created successfully.');
    }
}
