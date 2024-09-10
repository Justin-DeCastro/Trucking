<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GDRAccounting extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'particulars',
        'payment_amount',
        'payment_channel',
        'proof_of_payment',
        'notes',
    ];
    protected $casts = [
        'date' => 'datetime',
    ];
}
