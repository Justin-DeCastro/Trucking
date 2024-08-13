<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchManager extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'branch_managers';

    // The attributes that are mass assignable.
    protected $fillable = [
        'branch',
        'name',
        'email',
        'phone',
        'date' ,
       
    ];

    // Optional: Add validation rules here or in a Form Request class
}
