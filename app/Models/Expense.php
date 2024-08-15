<?php
// app/Models/Expense.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'expenses';

    // Define the fillable attributes
    protected $fillable = [
    
        'date',
        'particulars',
        'expense_amount',
        'notes',
    ];

    // Define relationships if necessary (e.g., account)
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}

