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
        'email',
        'phone',
        'pickup_date',
        'pickup_address',
        'dropoff_address',
        'item_list',
        'comments',
        'tracking_number',
        'assigned_driver_id', // Add this line
        'driver_id',
    ];
  
    public function assigned_driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }


    
}
