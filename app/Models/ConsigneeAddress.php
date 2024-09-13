<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsigneeAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'address',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
