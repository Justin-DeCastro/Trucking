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
        'civil_status' => 'required|string|in:Single,Married,Divorced,Widowed',
        'gender' => 'required|string|in:Male,Female,Other',
        'mobile' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'files.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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

    // Handle the files upload
    $filePaths = [];
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('files');

            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Move the file to the public directory
            $file->move($destinationPath, $fileName);

            // Store the file path
            $filePaths[] = 'files/' . $fileName;
        }
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
        'profile_image' => $profileImagePath,
        'files' => json_encode($filePaths),
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Employee details added successfully!');
}


public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'employee_name' => 'required|string|max:255',
        'id_number' => 'required|string|max:255|unique:employees,id_number,' . $id,
        'position' => 'required|string|max:255',
        'date_hired' => 'required|date',
        'birthday' => 'required|date',
        'birth_place' => 'required|string|max:255',
        'civil_status' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'mobile' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'files.*' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048' // Validation for multiple files
    ]);

    $employee = Employee::findOrFail($id);

    // Handle profile image upload
    if ($request->hasFile('profile_image')) {
        // Delete the old image
        if ($employee->profile_image && file_exists(public_path($employee->profile_image))) {
            unlink(public_path($employee->profile_image));
        }

        $file = $request->file('profile_image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/employees'), $filename);
        $employee->profile_image = 'images/employees/' . $filename;
    }

    // Handle multiple file uploads
    $filePaths = [];
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/employees/files'), $filename);
            $filePaths[] = 'images/employees/files/' . $filename;
        }
    }

    // Update employee details
    $employee->update([
        'employee_name' => $request->input('employee_name'),
        'id_number' => $request->input('id_number'),
        'position' => $request->input('position'),
        'date_hired' => $request->input('date_hired'),
        'birthday' => $request->input('birthday'),
        'birth_place' => $request->input('birth_place'),
        'civil_status' => $request->input('civil_status'),
        'gender' => $request->input('gender'),
        'mobile' => $request->input('mobile'),
        'address' => $request->input('address'),
        'profile_image' => $employee->profile_image, // Maintain updated profile image path
        'files' => json_encode($filePaths), // Store the file paths as a JSON array
    ]);

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
    public function showArchived()
{
    // $vehicles = Vehicle::all();
    $archivedEmployee = Employee::where('status', 'ARCHIVED')->get();

    // Return a view with the archived vehicles data
    return view('Admin.employee_archive', ['archivedEmployee' => $archivedEmployee]);
    // return view('Admin.Addtruck_Archived',compact('vehicles'));
}

    // VehicleController.php
public function archive($id)
{
    $employee = Employee::findOrFail($id);
    $employee->status = 'ARCHIVED';
    $employee->save();

    return redirect()->back()->with('success', 'Data moved to archived successfully!');
}

}
