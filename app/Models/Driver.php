<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'contact',
        'email',
        'license_number',  // Add status here
        'plate_number',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
