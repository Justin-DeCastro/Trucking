<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ensure this is imported if using User model for relationships

class Rubix extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'rubixes';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'sender_name', 'transport_mode', 'shipping_type', 'delivery_type', 'journey_type',
        'consignee_name', 'consignee_address', 'consignee_email', 'consignee_mobile',
        'consignee_city', 'consignee_province', 'consignee_barangay', 'consignee_building_type',
        'merchant_name', 'merchant_address', 'merchant_email', 'merchant_mobile',
        'merchant_city', 'merchant_province', 'tracking_number', 'updated_by'
    ];

    // Relationship with the User model for the user who updated the record
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
