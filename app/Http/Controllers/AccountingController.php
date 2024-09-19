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
use App\Models\Loan;
use App\Models\Receivable;
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
    public function GDR_receivable(Request $request, $borrowerId = null) {
        // Fetch all loans
        $loans = Loan::all();
        $receivables = Receivable::all();
        $totalreceivables = Receivable::count();
        // Fetch all unique borrowers with their IDs
        $borrowers = Loan::select('borrower', 'id', 'date')->distinct()->get();
        $loans = Loan::select('borrower')->get();

        // Fetch the current logged-in user
        $currentIssuer = auth()->user()->name; // Adjust according to your user model

        // Default date borrowed
        $dateBorrowed = null;
        $selectedBorrowerId = null;

        // If a borrower ID is provided in the URL, find their loan and set the date
        if ($borrowerId) {
            $loan = Loan::find($borrowerId);
            if ($loan) {
                $selectedBorrowerId = $loan->id;
                $dateBorrowed = $loan->date;
            }
        }

        // If a borrower is selected via form submission, update the date
        if ($request->isMethod('post') && $request->has('borrower')) {
            $selectedBorrowerId = $request->input('borrower');
            $loan = Loan::find($selectedBorrowerId);
            $dateBorrowed = $loan ? $loan->date : null;
        }

        // Pass data to the view
        return view('Accounting.Receivables', compact('loans', 'borrowers', 'currentIssuer', 'dateBorrowed', 'selectedBorrowerId','totalreceivables','receivables','loans'));
    }

    public function financialreport(Request $request)
    {
        $accountId = $request->input('account');
        $plateNumbers = Booking::pluck('plate_number')->unique();

        // Fetch all transactions, preventives, and loans
        $transactions = Transaction::all();
        $preventives = Preventive::all();
        $loans = Loan::all();

        // Fetch account names
        $accounts = Account::all()->keyBy('id');

        // Format transactions by date with account names
        $formattedTransactions = $transactions->map(function ($transaction) use ($accounts) {
            $accountName = $accounts->get($transaction->account_id)->name ?? 'N/A';
            return [
                'date' => \Carbon\Carbon::parse($transaction->created_at)->format('d-M-Y'),
                'accountName' => $accountName,
                'particulars' => $transaction->particulars,
                'depositBalance' => (float) $transaction->deposit_amount,
                'withdrawBalance' => (float) $transaction->withdraw_amount,
                'netIncome' => (float) $transaction->deposit_amount - (float) $transaction->withdraw_amount,
            ];
        });

        // Format preventives by date with account names
        $formattedPreventives = $preventives->map(function ($preventive) use ($accounts) {
            $accountName = $accounts->get($preventive->account_id)->name ?? 'N/A';
            return [
                'date' => \Carbon\Carbon::parse($preventive->created_at)->format('d-M-Y'),
                'accountName' => $accountName,
                'partsReplaced' => $preventive->parts_replaced,
                'quantity' => (int) $preventive->quantity,
                'pricePerPiece' => (float) $preventive->price_parts_replaced,
                'totalAmount' => (float) $preventive->price_parts_replaced * (int) $preventive->quantity,
            ];
        });

        // Format loans by date with account names
        $formattedLoans = $loans->map(function ($loan) use ($accounts) {
            $accountName = $accounts->get($loan->account_id)->name ?? 'N/A';
            return [
                'date' => \Carbon\Carbon::parse($loan->created_at)->format('d-M-Y'),
                'accountName' => $accountName,
                'borrower' => $loan->borrower,
                'initialAmount' => (float) $loan->initial_amount,
                'interest' => (float) $loan->interest_percentage,
                'totalPayment' => (float) $loan->total_payment,
            ];
        });

        // Calculate grand totals
        $grandTotalDeposit = $transactions->sum(function ($transaction) {
            return (float) $transaction->deposit_amount;
        });
        $grandTotalWithdraw = $transactions->sum(function ($transaction) {
            return (float) $transaction->withdraw_amount;
        });
        $grandTotalExpense = $transactions->sum(function ($transaction) {
            return (float) $transaction->expense_amount;
        });
        $grandNetIncome = $grandTotalDeposit - $grandTotalWithdraw;

        $grandTotalPayment = $preventives->sum(function ($preventive) {
            return (float) $preventive->price_parts_replaced * (int) $preventive->quantity;
        });

        $grandTotalInitialAmount = $loans->sum(function ($loan) {
            return (float) $loan->initial_amount;
        });
        $grandTotalLoanPayment = $loans->sum(function ($loan) {
            return (float) $loan->total_payment;
        });

        $startingBalance = $accountId
            ? StartingBalance::where('account_id', $accountId)->value('amount')
            : 0;

        $accounts = Account::all();

        return view('Accounting.FinancialReport', [
            'accounts' => $accounts,
            'formattedTransactions' => $formattedTransactions,
            'formattedPreventives' => $formattedPreventives,
            'formattedLoans' => $formattedLoans,
            'grandTotalDeposit' => $grandTotalDeposit,
            'grandTotalWithdraw' => $grandTotalWithdraw,
            'grandTotalExpense' => $grandTotalExpense,
            'grandNetIncome' => $grandNetIncome,
            'grandTotalPayment' => $grandTotalPayment,
            'grandTotalInitialAmount' => $grandTotalInitialAmount,
            'grandTotalLoanPayment' => $grandTotalLoanPayment,
            'plateNumbers' => $plateNumbers,
            'startingBalance' => $startingBalance,
        ]);
    }









}
