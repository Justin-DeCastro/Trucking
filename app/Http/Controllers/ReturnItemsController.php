<?php
namespace App\Http\Controllers;

use App\Models\ReturnItem; // Add this line to use the model
use Illuminate\Http\Request;

class ReturnItemsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'return_date' => 'required|date',
            'product_name' => 'required|string|max:255',
            'return_reason' => 'required|string',
            'return_quantity' => 'required|integer',
            'condition' => 'required|string',
            'driver_id' => 'nullable|exists:users,id',
            'proof_of_return' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('proof_of_return')) {
            $file = $request->file('proof_of_return');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path('proofs');

            // Create directory if it doesn't exist
            if (!file_exists($filePath)) {
                mkdir($filePath, 0755, true);
            }

            // Move file to public directory
            $file->move($filePath, $fileName);
            $validatedData['proof_of_return'] = $fileName;
        }

        ReturnItem::create($validatedData);

        return redirect()->back()->with('success', 'Return item created successfully.');
    }

    public function approve($id)
    {
        $returnItem = ReturnItem::findOrFail($id);
        // Add your approval logic here
        $returnItem->status = 'approved'; // Assuming there's a status field
        $returnItem->save();

        return redirect()->back()->with('success', 'Return item approved.');
    }

    public function reject($id)
    {
        $returnItem = ReturnItem::findOrFail($id);
        // Add your rejection logic here
        $returnItem->status = 'rejected'; // Assuming there's a status field
        $returnItem->save();

        return redirect()->back()->with('success', 'Return item rejected.');
    }
}
