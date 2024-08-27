<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_number', 'position','profile_image'];

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
