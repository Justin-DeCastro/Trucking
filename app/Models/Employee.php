<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'id_number',
        'position',
        'date_hired',
        'birthday',
        'birth_place',
        'civil_status',
        'gender',
        'mobile',
        'address',
        'profile_image',
        'files',
        'status',
    ];

    protected $casts = [
        'files' => 'array', // Cast 'files' to an array for easier manipulation
    ];

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
