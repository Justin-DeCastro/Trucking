<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'truck_name',
        'truck_model',
        'truck_capacity',
        'truck_status',
        'quantity',
        'or',
        'cr',
    ];

    // If storing document paths as a JSON array, you need to cast it
    protected $casts = [
        'documents' => 'array',
    ];

    // Define a relationship with the Document model, if needed
    //
    public function bookings()
{
    return $this->hasMany(Booking::class);
}
}
