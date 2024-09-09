<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function logActivity(Request $request)
    {
        $user = auth()->user();
        $activity = $request->input('activity');

        if ($user && $activity) {
            ActivityLog::create([
                'user_id' => $user->id,
                'activity' => $activity,
                'logged_in_at' => now(), // Set the current timestamp
            ]);
        }

        return response()->json(['status' => 'success']);
    }
}
