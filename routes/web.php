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
Route::get('sendcourier', [AccountingController::class, 'send_courier'])->name('sendcourier');
Route::get('sentInQueue', [AccountingController::class, 'sentin_queue'])->name('sentInQueue');
Route::get('shippingcourier', [AccountingController::class, 'shipping_courier'])->name('shippingcourier');
Route::get('totaldelivered', [AccountingController::class, 'total_delivered'])->name('totaldelivered');
Route::get('totalsent', [AccountingController::class, 'total_sent'])->name('totalsent');

//admin
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

Route::post('/booking', [BookingController::class, 'submitForm'])->name('booking.submit');

Route::patch('/bookings/{booking}/assign-driver', [BookingController::class, 'assignDriver'])->name('bookings.assignDriver');


Route::post('/drivers-store', [RegisterController::class, 'register'])->name('drivers.store');

//manage courier order
Route::get('order-for-courier', [AdminController::class, 'courier_order'])->name('order-for-courier');
//payment
// In web.php


// Define a route for updating the payment status with POST method
Route::post('/bookings/{booking}/update-order-status', [BookingController::class, 'updateOrderStatus'])->name('update.order.status');
// routes/web.php
Route::post('/submit-order-amount/{booking}', [BookingController::class, 'updateOrderAmount'])
    ->name('orderamount.update');



//plate number
// web.php or api.php
Route::post('/save-plate-number', [BookingController::class, 'storePlateNumber'])->name('save.plate.number');

//location update
// In web.php or your routes file
Route::post('/bookings/{booking}/update-location-status', [BookingController::class, 'updateLocationStatus'])->name('update.location.status');

//payment status
// web.php
Route::put('/bookings/{booking}/update-payment-status', [BookingController::class, 'updatePaymentStatus'])->name('update.payment.status');











