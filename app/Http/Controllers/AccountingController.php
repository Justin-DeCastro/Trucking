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

    // Fetch all transactions initially
    $transactions = Transaction::all();

    // Group transactions by month, then by day
    $monthlyTransactions = $transactions->groupBy(function ($transaction) {
        return \Carbon\Carbon::parse($transaction->created_at)->format('Y-m'); // Group by month (year-month)
    })->map(function ($monthTransactions) {
        return $monthTransactions->groupBy(function ($transaction) {
            return \Carbon\Carbon::parse($transaction->created_at)->format('Y-m-d'); // Group by date (year-month-day)
        })->map(function ($dayTransactions) {
            $depositBalance = $dayTransactions->sum(function ($transaction) {
                return (float) $transaction->deposit_amount; // Ensure deposit_amount is cast to float
            });
            $withdrawBalance = $dayTransactions->sum(function ($transaction) {
                return (float) $transaction->withdraw_amount; // Ensure withdraw_amount is cast to float
            });
            $expenseBalance = $dayTransactions->sum(function ($transaction) {
                return (float) $transaction->expense_amount; // Ensure expense_amount is cast to float
            });
            $netIncome = $depositBalance - $withdrawBalance; // Calculate net income for the day

            return [
                'transactions' => $dayTransactions,
                'depositBalance' => $depositBalance,
                'withdrawBalance' => $withdrawBalance,
                'expenseBalance' => $expenseBalance,
                'netIncome' => $netIncome,
            ];
        });
    });

    // Calculate overall totals for the first table
    $grandTotalDeposit = $transactions->sum(function ($transaction) {
        return (float) $transaction->deposit_amount; // Ensure deposit_amount is cast to float
    });
    $grandTotalWithdraw = $transactions->sum(function ($transaction) {
        return (float) $transaction->withdraw_amount; // Ensure withdraw_amount is cast to float
    });
    $grandTotalExpense = $transactions->sum(function ($transaction) {
        return (float) $transaction->expense_amount; // Ensure expense_amount is cast to float
    });
    $grandNetIncome = $grandTotalDeposit - $grandTotalWithdraw;

    // Fetch preventive data and group by month and day
    $preventives = Preventive::all();
    $monthlyPreventives = $preventives->groupBy(function ($preventive) {
        return \Carbon\Carbon::parse($preventive->created_at)->format('Y-m'); // Group by month
    })->map(function ($monthPreventives) {
        return $monthPreventives->groupBy(function ($preventive) {
            return \Carbon\Carbon::parse($preventive->created_at)->format('Y-m-d'); // Group by date
        })->map(function ($dayPreventives) {
            $totalPayment = $dayPreventives->sum(function ($preventive) {
                return (float) $preventive->price_parts_replaced * (int) $preventive->quantity; // Calculate per transaction, cast to numeric types
            });

            return [
                'preventives' => $dayPreventives,
                'totalPayment' => $totalPayment, // Total per day
            ];
        });
    });

    // Calculate overall totals for the Preventive Maintenance table
    $grandTotalPayment = $preventives->sum(function ($preventive) {
        return (float) $preventive->price_parts_replaced * (int) $preventive->quantity; // Calculate grand total payment, cast to numeric types
    });

    // Fetch loan data and group by month and day
    $loans = Loan::all();
    $monthlyLoans = $loans->groupBy(function ($loan) {
        return \Carbon\Carbon::parse($loan->created_at)->format('Y-m'); // Group by month
    })->map(function ($monthLoans) {
        return $monthLoans->groupBy(function ($loan) {
            return \Carbon\Carbon::parse($loan->created_at)->format('Y-m-d'); // Group by date
        })->map(function ($dayLoans) {
            $totalInitialAmount = $dayLoans->sum(function ($loan) {
                return (float) $loan->initial_amount; // Calculate total initial amount
            });
            $totalPayment = $dayLoans->sum(function ($loan) {
                return (float) $loan->total_payment; // Calculate total payment
            });

            return [
                'loans' => $dayLoans,
                'totalInitialAmount' => $totalInitialAmount, // Total initial amount per day
                'totalPayment' => $totalPayment, // Total payment per day
            ];
        });
    });

    // Calculate overall totals for the Loan table
    $grandTotalInitialAmount = $loans->sum(function ($loan) {
        return (float) $loan->initial_amount; // Calculate grand total initial amount
    });
    $grandTotalPayment = $loans->sum(function ($loan) {
        return (float) $loan->total_payment; // Calculate grand total payment
    });

    // Overall balances calculation
    $depositBalance = $transactions->sum(function ($transaction) {
        return (float) $transaction->deposit_amount; // Ensure deposit_amount is cast to float
    });
    $withdrawBalance = $transactions->sum(function ($transaction) {
        return (float) $transaction->withdraw_amount; // Ensure withdraw_amount is cast to float
    });
    $expenseBalance = $transactions->sum(function ($transaction) {
        return (float) $transaction->expense_amount; // Ensure expense_amount is cast to float
    });

    $startingBalance = $accountId
        ? StartingBalance::where('account_id', $accountId)->value('amount')
        : 0;

    // Fetch all accounts
    $netIncome = $depositBalance - $withdrawBalance;
    $accounts = Account::all();

    // Return view with data
    return view('Accounting.FinancialReport', [
        'accounts' => $accounts,
        'transactions' => $transactions,
        'depositBalance' => $depositBalance,
        'withdrawBalance' => $withdrawBalance,
        'startingBalance' => $startingBalance,
        'expenseBalance' => $expenseBalance,
        'netIncome' => $netIncome,
        'monthlyTransactions' => $monthlyTransactions,
        'monthlyPreventives' => $monthlyPreventives, // Pass preventives data to view
        'monthlyLoans' => $monthlyLoans, // Pass loans data to view
        'grandTotalDeposit' => $grandTotalDeposit,
        'grandTotalWithdraw' => $grandTotalWithdraw,
        'grandTotalExpense' => $grandTotalExpense,
        'grandNetIncome' => $grandNetIncome,
        'grandTotalPayment' => $grandTotalPayment, // Grand total for Preventive Maintenance
        'grandTotalInitialAmount' => $grandTotalInitialAmount, // Grand total for Initial Amount
        'grandTotalLoanPayment' => $grandTotalPayment, // Grand total for Loan Payments
    ]);
}








}
