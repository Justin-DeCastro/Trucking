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
        'transport_mode',
        'shipping_type',
        'delivery_type',
        'journey_type',
        'consignee_name',
        'consignee_address',
        'consignee_email',
        'consignee_mobile',
        'consignee_city',
        'consignee_province',
        'consignee_barangay',
        'consignee_building_type',
        'merchant_name',
        'merchant_address',
        'merchant_email',
        'merchant_mobile',
        'merchant_city',
        'merchant_province',
        'driver_name',
        'plate_number',
        'tracking_number',
        'date',
'order_number',
'truck_type',
'qr_code_path',


        'driver_id', // Add this if you have a driver_id field
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
