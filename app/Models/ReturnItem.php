<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'return_date',
        'product_name',
        'return_reason',
        'return_quantity',
        'condition',
        'driver_id',
        'proof_of_return',
        'status',
    ];

    /**
     * Get the driver associated with the return item.
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
