<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employee_details()
    {
        $employees = Employee::all();
        return view('Admin.employee', compact('employees'));
    }

    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'id_number' => 'required|string|max:255|unique:employees,id_number',
        'position' => 'required|string|max:255',
        'employee_name' => 'required|string|max:255',
        'date_hired' => 'required|date',
        'birthday' => 'required|date',
        'birth_place' => 'required|string|max:255',
        'civil_status' => 'required|string|in:Single,Married,Divorced,Widowed', // Adjust the values as needed
        'gender' => 'required|string|in:Male,Female,Other', // Adjust the values as needed
        'mobile' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
    ]);

    // Handle the profile image upload
    $profileImagePath = null;
    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $destinationPath = public_path('profile_images');

        // Ensure the directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // Move the image to the public directory
        $image->move($destinationPath, $imageName);

        // Set the image path for database storage
        $profileImagePath = 'profile_images/' . $imageName;
    }

    // Create a new employee record
    Employee::create([
        'id_number' => $request->id_number,
        'position' => $request->position,
        'employee_name' => $request->employee_name,
        'date_hired' => $request->date_hired,
        'birthday' => $request->birthday,
        'birth_place' => $request->birth_place,
        'civil_status' => $request->civil_status,
        'gender' => $request->gender,
        'mobile' => $request->mobile,
        'address' => $request->address,
        'profile_image' => $profileImagePath, // Save the image path
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Employee details added successfully!');
}
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255|unique:employees,id_number,' . $id,
            'position' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $employee = Employee::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('profile_image')) {
            // Delete the old image
            if ($employee->profile_image) {
                unlink(public_path($employee->profile_image));
            }

            $file = $request->file('profile_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/employees'), $filename);
            $employee->profile_image = 'images/employees/' . $filename;
        }

        // Update employee details
        $employee->update($request->except('profile_image'));

        return redirect()->back()->with('success', 'Employee details updated successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        // Delete the image file
        if ($employee->profile_image) {
            unlink(public_path($employee->profile_image));
        }

        // Delete the employee record
        $employee->delete();

        return redirect()->back()->with('success', 'Employee deleted successfully!');
    }
}
