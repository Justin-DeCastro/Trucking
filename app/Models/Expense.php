<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'fuel_cost',
        'maintenance_repairs',
        'tolls_fees',
        'driver_expenses',
    ];
    
}
