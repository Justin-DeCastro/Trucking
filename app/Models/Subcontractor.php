<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcontractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'subcontractor_id',
        'full_name',
        'address',
        'email_address',
        'phone_number',
        'file_upload',
    ];
}
