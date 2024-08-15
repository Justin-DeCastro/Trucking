<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'particulars',
        'deposit_amount',
        'notes',
        'withdraw_id', // Foreign key to reference Withdraw
    ];

    /**
     * Get the withdraw that owns the deposit.
     */
    public function withdraw()
    {
        return $this->belongsTo(Withdraw::class, 'withdraw_id');
    }
}
