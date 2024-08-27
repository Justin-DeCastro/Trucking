<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'date',
        'particulars',
        'deposit_amount',
        'withdraw_amount',
        'expense_amount',
        'notes',
        'payment_channel',

        'proof_payment',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
