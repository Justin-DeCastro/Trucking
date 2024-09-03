<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preventive extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'truck_model',
        'parts_replaced',
        'price_parts_replaced',
        'proof_of_need_to_fixed',
        'proof_of_payment',
    ];

    // Casting attributes to handle JSON arrays
    protected $casts = [
        'proof_of_need_to_fixed' => 'array',
        'proof_of_payment' => 'array',
    ];
}
