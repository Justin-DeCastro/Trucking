<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingSalary extends Model
{
    use HasFactory;
    protected $fillable = [
    
        'delivery_routes',
        'driver_salary',
        'helper_salary',
      
    ];
}
