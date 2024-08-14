<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Expense;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Account;
use App\Models\Transaction;
class AccountingController extends Controller
{
    public function accounting_dash(){
        return view('Accounting.Accountingdash');
    }
    public function addexpense(){
        $deposits = Deposit::all();
        $withdraws = Withdraw::all();

        // Calculate total deposit amount
        $totalDeposits = $deposits->sum('deposit_amount');

        // Calculate total withdrawal amount
        $totalWithdrawals = $withdraws->sum('withdraw_amount');

        // Calculate outstanding balance
        $outstandingBalance = $totalDeposits - $totalWithdrawals;

        // Pass the data to the view
        return view('Accounting.AddExpense', compact('deposits', 'withdraws', 'outstandingBalance'));
    }
    public function all_courier(){
        return view('Accounting.AllCourier');
    }
    public function paymentproof(){
        return view('Accounting.ProofOfPayment');
    }
    public function depositamount()
    {
        // Fetch all deposits and withdrawals
        $deposits = Deposit::all();
        $withdraws = Withdraw::all();

        // Calculate total deposit amount
        $totalDeposits = $deposits->sum('deposit_amount');

        // Calculate total withdrawal amount
        $totalWithdrawals = $withdraws->sum('withdraw_amount');

        // Calculate outstanding balance
        $outstandingBalance = $totalDeposits - $totalWithdrawals;

        // Pass the data to the view
        return view('Accounting.Deposit', compact('deposits', 'withdraws', 'outstandingBalance'));
    }

    public function send_courier(){
        return view('Accounting.SendCourier');
    }
    public function branch_list(){
        return view('Accounting.BranchList');
    }
    public function cash_collection(){
        $drivers = User::where('role', 'courier')->get(); // Get only couriers
        $bookings = Booking::all();
        return view('Accounting.CashCollection',compact('drivers','bookings'));
    }
    public function delivery_queue(){
        return view('Accounting.BranchList');
    }
    public function sentin_queue(){
        return view('Accounting.SentInQueue');
    }
    public function total_delivered(){
        return view('Accounting.TotalDelivered');
    }
    public function shipping_courier(){
        return view('Accounting.ShippingCourier');
    }
    public function total_sent(){
        return view('Accounting.TotalSent');
    }
    public function account()
{
    // Fetch all transactions initially
    $transactions = Transaction::all();

    // Calculate balances
    $outstandingBalance = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    $totalExpense = $transactions->sum('expense_amount');
    $remainingBalance = $outstandingBalance - ($totalWithdraw + $totalExpense);

    // Fetch all accounts
    $accounts = Account::all();

    // Return view with data
    return view('Accounting.Account_Accounting', [
        'accounts' => $accounts,
        'transactions' => $transactions,
        'outstandingBalance' => $outstandingBalance,
        'remainingBalance' => $remainingBalance,
    ]);
}

    // Method to display transactions based on account selection
    public function showTransactions(Request $request)
{
    $accountId = $request->input('account');

    // Fetch all accounts for the dropdown
    $accounts = Account::all();

    // Fetch transactions based on the selected account
    $transactions = $accountId
        ? Transaction::where('account_id', $accountId)->get()
        : Transaction::all();

    // Calculate balances
    $outstandingBalance = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    $totalExpense = $transactions->sum('expense_amount');
    $remainingBalance = $outstandingBalance - ($totalWithdraw + $totalExpense);

    // Return view with data
    return view('Accounting.Account_Accounting', [
        'accounts' => $accounts,
        'transactions' => $transactions,
        'outstandingBalance' => $outstandingBalance,
        'remainingBalance' => $remainingBalance,
    ]);
}

    // Method to filter transactions based on account selection
    public function filter(Request $request)
{
    $accountId = $request->input('account');

    // Fetch all accounts for the dropdown
    $accounts = Account::all();

    // Fetch transactions based on the selected account
    $transactions = $accountId
        ? Transaction::where('account_id', $accountId)->get()
        : Transaction::all();

    // Calculate balances
    $outstandingBalance = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    $totalExpense = $transactions->sum('expense_amount');
    $remainingBalance = $outstandingBalance - ($totalWithdraw + $totalExpense);

    // Return view with data
    return view('Accounting.Account_Accounting', [
        'accounts' => $accounts,
        'transactions' => $transactions,
        'outstandingBalance' => $outstandingBalance,
        'remainingBalance' => $remainingBalance,
    ]);
}
public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'date' => 'required|date',
            'particulars' => 'required|string|max:255',
            'deposit_amount' => 'nullable|numeric',
            'withdraw_amount' => 'nullable|numeric',
            'expense_amount' => 'nullable|numeric',
            'notes' => 'nullable|string',
        ]);

        $transaction->update($request->all());

        return redirect()->back()->with('success', 'Transaction updated successfully.');
    }

    // Remove a transaction
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully.');
    }
    public function updateDirectly(Request $request, Transaction $transaction)
    {
        // Validate the incoming request data
        $request->validate([
            'date' => 'required|date',
            'particulars' => 'required|string|max:255',
            'deposit_amount' => 'nullable|numeric',
            'withdraw_amount' => 'nullable|numeric',
            'expense_amount' => 'nullable|numeric',
            'notes' => 'nullable|string',
        ]);

        // Update the transaction with the new data
        $transaction->update($request->all());

        // Redirect with a success message
        return redirect()->back()->with('success', 'Transaction updated successfully.');
    }

}
