<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'bookings';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'sender_name',
        'pickup_address',
        'sender_phone',
        'item_list',
        'weight',
        'receiver_name',
        'receiver_email',
        'receiver_phone',
        'dropoff_address',
        'location',
        'truck_type',
        'order_status',
        'payment_status',
        'order_amount',
        'tracking_number',
        'driver_id', // Ensure this field exists in the database
    ];

    // Relationship with the User model for the driver
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
    public function vehicle()
{
    return $this->belongsTo(Vehicle::class, 'vehicle_id'); // Adjust 'vehicle_id' to the actual foreign key if needed
}
}
