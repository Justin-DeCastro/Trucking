<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:accounts,name',
        ]);

        Account::create($request->only('name'));

        return redirect()->back()->with('success', 'Account created successfully.');
    }

    public function index()
    {
        $accounts = Account::all();
        return view('transactions', compact('accounts'));
    }
}
