<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'merchant_city', 'merchant_province','tracking_number',
    ];
    // Relationship with the User model for the driver
  
}
