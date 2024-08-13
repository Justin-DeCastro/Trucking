<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BranchManager; // Ensure you have a Branch model
use Illuminate\Support\Facades\Redirect;

class BranchManagerController extends Controller
{
    /**
     * Show the form for creating a new branch.
     *
     * @return \Illuminate\View\View
     */
    // public function create()
    // {
    //     return view('branch.create'); // Adjust the path as needed
    // }

    /**
     * Store a newly created branch in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'branch' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'date' => 'required|string|max:255',
            
        ]);

        BranchManager::create([
            'branch' => $request->branch,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
          
        ]);

        return redirect()->back()->with('success', 'Branch created successfully.');
    }

    /**
     * Show the form for editing the specified branch.
     *
     * @param  \App\Models\BranchManager  $branch
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
     * @param  \App\Models\BranchManager  $branch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, BranchManager $branch)
{
    $request->validate([
        'branch' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'date' => 'required|date',
    ]);

    // Update the branch manager
    $branch->update([
        'branch' => $request->branch,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'date' => $request->date,
    ]);

    return redirect()->back()->with('success', 'Branch Manager updated successfully.');
}


}
