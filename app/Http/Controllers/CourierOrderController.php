<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CourierOrderController extends Controller
{
    public function index(){

    }
    public function updateStatus(Request $request, $id)
{
    $driver = User::findOrFail($id);
    $driver->status = $request->input('status');
    $driver->save();

    return redirect()->back()->with('success', 'Status updated successfully.');
}
}
