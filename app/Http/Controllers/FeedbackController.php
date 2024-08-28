<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function accept($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->status = 'Accepted';
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback accepted.');
    }

    public function decline($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->status = 'Declined';
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback declined.');
    }

    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',

        ]);

        // Create a new Rubix record
        Feedback::create($validatedData);

        // Redirect or show a success message
        return redirect()->back()->with('Message', "Successful");
    }
}
