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
        'contact_first_name',
        'contact_last_name',
        'email_address',
        'phone_number',
        'file_upload',
    ];
}
