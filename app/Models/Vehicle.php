<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_name',
        'truck_capacity',
        'truck_status',
        'quantity',
    ];
    public function bookings()
{
    return $this->hasMany(Booking::class);
}
}
