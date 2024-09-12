<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    // Specify the table associated with the model if it's not the plural form of the model name
    protected $table = 'trips';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'arrival_proof',
        'proof_of_delivery',
        'trip_completion',


        'plate_number', // Add plate_number here
    ];
    protected $casts = [
        'arrival_proof' => 'array',
        'proof_of_delivery' => 'array',
    ];

    // Optionally, you can add any relationships or custom methods here
}
