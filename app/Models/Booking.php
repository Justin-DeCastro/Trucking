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
        'full_name',
        'receiver_name',
        'order_status',
        'order_amount',
        'plate_number',
        'location',
        'other_location',
        'email',
        'phone',
        'pickup_date',
        'pickup_address',
        'dropoff_address',
        'item_list',
        'comments',
        'tracking_number',
        'driver_id', // Correct field name
    ];
    

    // Relationship with the User model for the driver
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
