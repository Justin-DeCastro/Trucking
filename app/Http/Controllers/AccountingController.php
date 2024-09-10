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
use App\Models\Preventive;
use App\Models\StartingBalance;
use App\Models\RatePerMile;
use App\Models\GDRAccounting;
use App\Models\Budget;
class AccountingController extends Controller
{
    public function accounting_dash(){
        return view('Accounting.Accountingdash');
    }
    public function preventive(Request $request) {
        // Get the selected plate number from the request
        $plateNumber = $request->input('plate_number');

        // Fetch distinct plate numbers for the dropdown
        $plateNumbers = Booking::pluck('plate_number')->unique();

        // Filter preventive maintenance records based on the selected plate number
        $preventive = $plateNumber
            ? Preventive::where('plate_number', $plateNumber)->get()
            : Preventive::all();

        // Calculate total kilometers per plate number
        $totalKilometersByPlate = RatePerMile::selectRaw('plate_number, SUM(km) as total_kilometers')
            ->groupBy('plate_number')
            ->get()
            ->pluck('total_kilometers', 'plate_number')
            ->toArray();

        // Return the view with preventive records, plate numbers, and total kilometers by plate
        return view('Accounting.PMS', compact('preventive', 'plateNumbers', 'totalKilometersByPlate'));
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
    // Fetch all deposits, withdrawals, and expenses
    $deposits = Deposit::all();
    $withdraws = Withdraw::all();
    $expenses = Expense::all();
    $proofOfPayment = Transaction::all();
  // Fetching all starting balances



    // Calculate totals
    $totalDeposits = $deposits->sum('deposit_amount');
    $totalWithdrawals = $withdraws->sum('withdraw_amount');
    $totalExpenses = $expenses->sum('expense_amount');

    // Calculate outstanding balance

    $outstandingBalance = $totalDeposits - $totalWithdrawals;
    $remainingBalance = $outstandingBalance - $totalExpenses;

    // Pass the data to the view
    return view('Accounting.Deposit', compact('deposits', 'withdraws', 'totalDeposits', 'totalWithdrawals', 'totalExpenses', 'remainingBalance', 'expenses' ,'outstandingBalance','proofOfPayment'));
}


    public function send_courier(){
        $references = Booking::all();
        return view('Accounting.SendCourier',compact('references'));
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
    public function GDR_Accounting() {
        // Fetch all approved budgets
        $approvedBudgets = Budget::where('status', 'Approved')->get();

        // Calculate the total amount to deduct
        $totalDeduction = $approvedBudgets->sum('budget_amount');

        // Fetch all GDRAccounting records
        $GDR = GDRAccounting::all();

        // Calculate the starting balance
        $startingBalance = GDRAccounting::sum('payment_amount') - $totalDeduction;

        // Pass data to the view
        return view('Accounting.GDRAccounting', compact('GDR', 'startingBalance'));
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
    public function account(Request $request)
{
    $accountId = $request->input('account');
    // Fetch all transactions initially
    $transactions = Transaction::all();

    // Calculate balances
    $outstandingBalance = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    $totalExpense = $transactions->sum('expense_amount');
    $remainingBalance = $outstandingBalance - ($totalWithdraw + $totalExpense);
    $startingBalance = $accountId
    ? StartingBalance::where('account_id', $accountId)->value('amount')
    : 0;
    // Fetch all accounts
    $netIncome = $outstandingBalance - $totalWithdraw;
    $accounts = Account::all();

    // Return view with data
    return view('Accounting.Account_Accounting', [
        'accounts' => $accounts,
        'transactions' => $transactions,
        'outstandingBalance' => $outstandingBalance,
        'remainingBalance' => $remainingBalance,
        'startingBalance' => $startingBalance,
        'totalExpense' => $totalExpense,
        'netIncome' => $netIncome,

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
        $startingBalance = $accountId
        ? StartingBalance::where('account_id', $accountId)->value('amount')
        : 0;
    // Calculate balances
    $outstandingBalance = $transactions->sum('deposit_amount');
    $totalWithdraw = $transactions->sum('withdraw_amount');
    $totalExpense = $transactions->sum('expense_amount');
    $remainingBalance = $outstandingBalance - ($totalWithdraw + $totalExpense);
    $netIncome = $outstandingBalance - $totalWithdraw;
    // Return view with data
    return view('Accounting.Account_Accounting', [
        'accounts' => $accounts,
        'transactions' => $transactions,
        'outstandingBalance' => $outstandingBalance,
        'remainingBalance' => $remainingBalance,
        'startingBalance' => $startingBalance,
        'totalExpense' => $totalExpense,
        'netIncome' => $netIncome,
    ]);
}

    // Method to filter transactions based on account selection
    public function filter(Request $request)
    {
        $accountId = $request->input('account');

        // Fetch all accounts for the dropdown
        $accounts = Account::all();

        // Fetch the starting balance for the selected account
        $startingBalance = $accountId
            ? StartingBalance::where('account_id', $accountId)->value('amount')
            : 0;
            // $startingBalance = $accountId
            // ? StartingBalance::where('account_id', $accountId)->sum('amount')
            // : 0;

        // Fetch transactions based on the selected account
        $transactions = $accountId
            ? Transaction::where('account_id', $accountId)->get()
            : Transaction::all();

        // Calculate balances


        $totalWithdraw = $transactions->sum('withdraw_amount');
        $outstandingBalance = ($transactions->sum('deposit_amount') + $startingBalance) - $totalWithdraw;
        $totalExpense = $transactions->sum('expense_amount');
        $netIncome = $outstandingBalance - $totalWithdraw;
        // $remainingBalance = $outstandingBalance - ($totalWithdraw + $totalExpense);

        // Return view with data
        return view('Accounting.Account_Accounting', [
            'accounts' => $accounts,
            'transactions' => $transactions,
            'outstandingBalance' => $outstandingBalance,
            // 'remainingBalance' => $remainingBalance,
            'totalExpense' => $totalExpense,
            'startingBalance' => $startingBalance,
            'netIncome' => $netIncome,
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
        return redirect()->back()->with('success', 'Transaction updated successfully.');
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
    public function startingbalance(Request $request)
    {
        $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'starting_balance' => 'required|numeric|min:0',
        ]);

        $accountId = $request->input('account_id');
        $startingBalance = $request->input('starting_balance');

        // Assuming you have a StartingBalance model
        StartingBalance::create([
            'account_id' => $accountId,
            'amount' => $startingBalance,
        ]);

        return redirect()->route('filter.transactions')->with('success', 'Starting balance added successfully.');
    }

}
