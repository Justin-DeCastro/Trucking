<?php

// app/Http/Controllers/Auth/VerificationController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function showForm()
    {
        return view('auth.verify');
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        $user = User::where('verification_code', $request->code)->first();

        if ($user) {
            $user->is_verified = true;
            $user->verification_code = null; // Clear the code after verification
            $user->save();

            return redirect()->route('login')->with('success', 'Email verified successfully. You can now log in.');
        } else {
            return back()->withErrors(['code' => 'Invalid verification code.']);
        }
    }
}
