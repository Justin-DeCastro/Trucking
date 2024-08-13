<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManageBranch; // Ensure you have a Branch model
use Illuminate\Support\Facades\Redirect;

class BranchController extends Controller
{
    /**
     * Show the form for creating a new branch.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('branch.create'); // Adjust the path as needed
    }

    /**
     * Store a newly created branch in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            
        ]);

        ManageBranch::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => 'Active', // Set status to Active upon creation
        ]);

        return redirect()->back()->with('success', 'Branch created successfully.');
    }

    /**
     * Show the form for editing the specified branch.
     *
     * @param  \App\Models\ManageBranch  $branch
     * @return \Illuminate\View\View
     */
    // public function edit(ManageBranch $branch)
    // {
    //     return view('branch.edit', compact('branch')); // Adjust the path as needed
    // }

    /**
     * Update the specified branch in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageBranch  $branch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ManageBranch $branch)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'status' => 'required|string|in:Active,Inactive', // Validation rule
    ]);

    $branch->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'status' => $request->status, // Use the submitted status
    ]);

    return redirect()->back()->with('success', 'Branch updated successfully.');
}

}
