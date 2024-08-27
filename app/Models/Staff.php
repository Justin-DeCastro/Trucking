<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'employees';

    // The attributes that are mass assignable.
    protected $fillable = ['name', 'qr_code'];
}
