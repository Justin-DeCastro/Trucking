<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function recordAttendance(Request $request)
    {
        $qrCode = $request->input('qr_code');

        $attendance = Attendance::where('qr_code', $qrCode)
                                  ->whereDate('created_at', Carbon::today())
                                  ->first();

        if (!$attendance) {
            // New clock-in
            $attendance = new Attendance();
            $attendance->qr_code = $qrCode;
            $attendance->clock_in = Carbon::now();
            $attendance->save();
            return response()->json(['message' => 'Clocked in successfully']);
        } else {
            if (!$attendance->clock_out) {
                // Clock-out
                $attendance->clock_out = Carbon::now();
                $attendance->save();
                return response()->json(['message' => 'Clocked out successfully']);
            } else {
                return response()->json(['message' => 'Already clocked out'], 400);
            }
        }
    }
}
