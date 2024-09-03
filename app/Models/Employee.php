<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Add all the new fields to the $fillable array
    protected $fillable = [
        'employee_name', // Updated from 'name' to 'employee_name' based on your provided table headers
        'id_number',
        'position',
        'date_hired',
        'birthday',
        'birth_place',
        'civil_status',
        'gender',
        'mobile',
        'address',
        'profile_image'
    ];

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
