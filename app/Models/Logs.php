<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $fillable = [
        'booking_id', // Foreign key to the booking
        'user_id',    // ID of the user who performed the action
        'action',     // Description of the action
        'details',    // Additional details about the action
    ];

    // Define the relationship with Booking
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
