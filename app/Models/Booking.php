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
        'trip_ticket',
        'transport_mode',
        // 'shipping_type',
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
        'product_name',
        'proof_of_delivery',
        'driver_id', // Add this if you have a driver_id field
        'updated_by',
        'created_by' // Add the updated_by field
    ];

    // Relationship with the User model for the driver
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    // Relationship with the User model for the user who updated the record
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id'); // Adjust 'vehicle_id' to the actual foreign key if needed
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function ratePerMile()
    {
        return $this->belongsTo(RatePerMile::class, 'plate_number', 'plate_number');
    }
    // In Booking.php
public function activityLogs()
{
    return $this->hasMany(ActivityLog::class);
}

    // public static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($booking) {
    //         Logs::create([
    //             'booking_id' => $booking->id,
    //             'user_id' => auth()->id(),
    //             'action' => 'created',
    //             'details' => json_encode($booking->getAttributes()),
    //         ]);
    //     });

    //     static::updated(function ($booking) {
    //         Logs::create([
    //             'booking_id' => $booking->id,
    //             'user_id' => auth()->id(),
    //             'action' => 'updated',
    //             'details' => json_encode($booking->getChanges()),
    //         ]);
    //     });
    // }
    // public function logs()
    // {
    //     return $this->hasMany(Logs::class, 'booking_id');
    // }
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }


}
