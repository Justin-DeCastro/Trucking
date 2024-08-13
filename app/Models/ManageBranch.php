<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageBranch extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'manage_branches';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status',  // Add status here
    ];

    // Optional: Add validation rules here or in a Form Request class
}
