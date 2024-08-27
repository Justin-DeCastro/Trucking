<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preventive extends Model
{
    use HasFactory;
    protected $fillable = [

        'parts_replaced',
        'price_parts_replaced',


    ];
}
