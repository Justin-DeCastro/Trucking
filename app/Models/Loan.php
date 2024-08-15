<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    // Specify the table if it's different from the default convention
    // protected $table = 'loans';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'date',
        'borrower',
        'initial_amount',
        'interest',
        'payment_terms',
    ];

    // Optionally, you can specify which attributes should be cast to specific types
    protected $casts = [
        'date' => 'datetime', // Automatically cast date attributes to Carbon instances
        'initial_amount' => 'decimal:2', // Cast to decimal with 2 decimal places
        'interest' => 'decimal:2',       // Cast to decimal with 2 decimal places
        'payment_terms' => 'integer',     // Cast payment_terms to integer
    ];
}
