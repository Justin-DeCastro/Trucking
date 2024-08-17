<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BranchManagerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\SubcontractorController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\InController;
use App\Http\Controllers\OutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProofPaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\RubixController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('ordertracking', [HomeController::class, 'ordertracking'])->name('ordertracking');
Route::get('/track', [BookingController::class, 'trackBooking'])->name('track.booking');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('appointment', [HomeController::class, 'appointment'])->name('appointment');
//accounting
Route::get('allcourier', [AccountingController::class, 'all_courier'])->name('allcourier');
Route::get('branchlist', [AccountingController::class, 'branch_list'])->name('branchlist');
Route::get('cashcollection', [AccountingController::class, 'cash_collection'])->name('cashcollection');
Route::get('deliveryqueue', [AccountingController::class, 'delivery_queue'])->name('deliveryqueue');
Route::get('package', [AccountingController::class, 'send_courier'])->name('sendcourier');

Route::get('sentInQueue', [AccountingController::class, 'sentin_queue'])->name('sentInQueue');
Route::get('shippingcourier', [AccountingController::class, 'shipping_courier'])->name('shippingcourier');
Route::get('totaldelivered', [AccountingController::class, 'total_delivered'])->name('totaldelivered');
Route::get('totalsent', [AccountingController::class, 'total_sent'])->name('totalsent');

//admin post
Route::post('/rubix', [RubixController::class, 'submit'])->name('rubix.submit');



//admin get
Route::get('reference', [AdminController::class, 'reference'])->name('reference');
Route::get('admindash', [AdminController::class, 'dashboard'])->name('admindash');
Route::get('adminside', [AdminController::class, 'adminside'])->name('adminside');
Route::get('managebranch', [AdminController::class, 'managebranch'])->name('managebranch');
Route::get('branchmanager', [AdminController::class, 'branchmanager'])->name('branchmanager');
Route::get('branchincome', [AdminController::class, 'branch_income'])->name('branchincome');
Route::get('managecourier', [AdminController::class, 'manage_courier'])->name('managecourier');
Route::get('stafflist', [AdminController::class, 'staff_list'])->name('stafflist');
Route::get('customerlist', [AdminController::class, 'customer_list'])->name('customerlist');
Route::get('manageunit', [AdminController::class, 'manage_unit'])->name('manageunit');
Route::get('managetype', [AdminController::class, 'manage_type'])->name('managetype');
Route::get('pendingticket', [AdminController::class, 'pending_ticket'])->name('pendingticket');
Route::get('closedticket', [AdminController::class, 'closed_ticket'])->name('closedticket');
Route::get('answeredticket', [AdminController::class, 'answered_ticket'])->name('answeredticket');
Route::get('allticket', [AdminController::class, 'all_ticket'])->name('allticket');
Route::get('loginhistory', [AdminController::class, 'login_history'])->name('loginhistory');
Route::get('notificationhistory', [AdminController::class, 'notification_history'])->name('notificationhistory');
Route::get('manageappointment', [AdminController::class, 'manage_appointment'])->name('manageappointment');
Route::get('addtruck', [AdminController::class, 'addtruck'])->name('addtruck');
Route::get('addsubcon', [AdminController::class, 'addsubcon'])->name('addsubcon');
Route::get('addexpense', [AccountingController::class, 'addexpense'])->name('addexpense');
Route::get('paymentproof', [AccountingController::class, 'paymentproof'])->name('paymentproof');
Route::get('addproofpayment', [AccountingController::class, 'addproofpayment'])->name('addpayment.store');
Route::get('depositamount', [AccountingController::class, 'depositamount'])->name('depositamount');
Route::post('depositamounts', [DepositController::class, 'store'])->name('deposit.store');
Route::post('withdrawamounts', [WithdrawController::class, 'store'])->name('withdraw.store');
Route::get('loanamount', [LoanController::class, 'loanamount'])->name('loanamount');
Route::get('waybill', [AdminController::class, 'waybill'])->name('waybill');
Route::post('loanamount-store', [LoanController::class, 'store'])->name('loan.store');
//login and register
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


//courierdashboard
Route::get('courierdash', [AdminController::class, 'courier_dash'])->name('courierdash');
Route::get('accountingdash', [AdminController::class, 'accounting_dash'])->name('accountingdash');

//store branches
Route::post('/managebranches', [BranchController::class, 'store'])->name('managebranches.store');
Route::post('/branches/{branch}/update', [BranchController::class, 'update'])->name('managebranches.update');

//branch manager
Route::post('/managerbranch', [BranchManagerController::class, 'store'])->name('branchmanager.store');
Route::post('/managerbranches/{branch}/update', [BranchManagerController::class, 'update'])->name('branchmanager.update');

//driver
Route::get('add-driver', [AdminController::class, 'Add_driver'])->name('add-driver');

// Route::post('/booking', [BookingController::class, 'submitForm'])->name('booking.submit');

// In routes/web.php
Route::post('/booking/submit', [BookingController::class, 'submitForm'])->name('booking.submit');
Route::post('/appointment', [RubixController::class, 'submit'])->name('appointment.submit');

Route::patch('/bookings/{booking}/assign-driver', [BookingController::class, 'assignDriver'])->name('bookings.assignDriver');


Route::post('/drivers-store', [RegisterController::class, 'register'])->name('drivers.store');

//manage courier order
Route::get('order-for-courier', [AdminController::class, 'courier_order'])->name('order-for-courier');
//payment
// In web.php


// Define a route for updating the payment status with POST method
Route::post('/bookings/{booking}/update-order-status', [BookingController::class, 'updateOrderStatus'])->name('update.order.status');
// routes/web.php
Route::post('/update-order-amount', [BookingController::class, 'updateSingleOrderAmount'])
    ->name('orderamount.updateSingle');






//plate number
// web.php or api.php
Route::post('/save-plate-number', [BookingController::class, 'storePlateNumber'])->name('save.plate.number');

//location update
// In web.php or your routes file
Route::post('/bookings/{booking}/update-location-status', [BookingController::class, 'updateLocationStatus'])->name('update.location.status');

//payment status
// web.php
Route::put('/bookings/{booking}/update-payment-status', [BookingController::class, 'updatePaymentStatus'])->name('update.payment.status');

//vehicle store
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
Route::post('/vehicles/use/{id}', [VehicleController::class, 'useVehicle']);
Route::get('vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');

// Route for updating an existing vehicle
Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update');


// Route for deleting a vehicle
Route::delete('vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');
Route::post('/update-actual-weight/{id}', [BookingController::class, 'updateActualWeight'])->name('update.actual.weight');

//subcon
Route::post('subcontractors', [SubcontractorController::class, 'store'])->name('subcontractors.store');

//expense store
Route::post('Expenses', [ExpenseController::class, 'store'])->name('expense.store');
Route::post('totalExpenses', [ExpenseController::class, 'submit'])->name('totalexpense.store');

//payment
Route::post('uploadPayment', [ProofPaymentController::class, 'store'])->name('uploadpayment.store');
//account
Route::post('accounts', [AccountController::class, 'store'])->name('account.store');
Route::post('deposit', [InController::class, 'store'])->name('deposit.store');
Route::post('withdraw', [OutController::class, 'store'])->name('withdraw.store');
Route::get('account-accounting', [AccountingController::class, 'account'])->name('account-accounting');
Route::get('/filter-transactions', [AccountingController::class, 'filter'])->name('filter.transactions');
// web.php
Route::put('/transactions/{transaction}', [AccountingController::class, 'update'])->name('transactions.update');

// Route to delete a transaction
Route::delete('/transactions/{transaction}', [AccountingController::class, 'destroy'])->name('transactions.destroy');

//starting balance
Route::post('/startingbalance', [AccountingController::class, 'startingbalance'])->name('startingbalance.store');

//contact
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

//qr
Route::get('/qrcode', [QrCodeController::class, 'generate']);





