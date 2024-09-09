<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelayReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_ticket',
        'driver_name',
        'plate_number',
        'date',

        'delay_duration',
        'delay_cause',
        'additional_notes',
    ];

    // Optionally, if you want to define relationships
    // public function driver()
    // {
    //     return $this->belongsTo(User::class, 'driver_name');
    // }
}
