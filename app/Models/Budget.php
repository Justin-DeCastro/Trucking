<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    // Specify the table name if it is not the plural form of the model name
    protected $table = 'budgets';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'date',
        'department',
        'budget_amount',
        'expense_details',
        'voucher',
        'requestee',
        'bank_name',       // Added
        'account_name',    // Added
        'account_number',  // Added
    ];

    // Optionally, you can define any relationships or custom methods here
}
