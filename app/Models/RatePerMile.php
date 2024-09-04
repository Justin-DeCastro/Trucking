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
        'proof_of_payment',
        'date',
        'gross_income',
        'plate_number',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'plate_number', 'plate_number');
    }
}
