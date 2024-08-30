<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatePerMile extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate_per_mile',
        'operational_costs',
        'km',
        'date',
        'plate_number',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'plate_number', 'plate_number');
    }
}
