<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receivable extends Model
{
    use HasFactory;
    protected $fillable = [
        'issuer',
        'borrower',
        'principal',
        'mode_of_payment',
        'date_borrowed',
        'pay_now_date',
        'pay_later_date',
    ];
    // public function loan()
    // {
    //     return $this->belongsTo(Loan::class);
    // }
    public function loan()
    {
        return $this->belongsTo(Loan::class, 'borrower', 'borrower'); // Assuming borrower links these tables
    }

}
