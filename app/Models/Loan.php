<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'date',
        'borrower',
        'initial_amount',
        'interest_percentage',
        'payment_per_month',  // Added payment_per_month
        'payment_terms',
        'mode_of_payment',
        'total_payment',       // Added total_payment
    ];

    // Optionally, you can specify which attributes should be cast to specific types

}
