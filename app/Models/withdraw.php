<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'particulars',
        'withdraw_amount',
        'notes',
    ];

    /**
     * Get the deposits for the withdraw.
     */
    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'withdraw_id');
    }
}
