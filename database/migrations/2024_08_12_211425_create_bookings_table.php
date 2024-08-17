<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop columns that are no longer needed
            $table->dropColumn(['first_name', 'last_name', 'email', 'phone', 'pickup_date', 'comments']);
            
            // Add new columns
            $table->string('sender_name');
            $table->string('transport_mode');
            $table->string('shipping_type');
            $table->string('delivery_type');
            $table->string('journey_type');
            $table->string('consignee_name');
            $table->text('consignee_address');
            $table->string('consignee_email');
            $table->string('consignee_mobile');
            $table->string('consignee_city');
            $table->string('consignee_province');
            $table->string('consignee_barangay');
            $table->string('consignee_building_type');
            $table->string('merchant_name');
            $table->text('merchant_address');
            $table->string('merchant_email');
            $table->string('merchant_mobile');
            $table->string('merchant_city');
            $table->string('merchant_province');
            $table->unsignedBigInteger('driver_id'); // Add foreign key column
            $table->string('tracking_number')->unique(); // Unique tracking number column
            $table->string('qr_code')->nullable(); // QR code path column
            
            // Add foreign key constraint
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Revert changes if needed
            $table->dropForeign(['driver_id']);
            $table->dropColumn(['sender_name', 'transport_mode', 'shipping_type', 'delivery_type', 'journey_type', 'consignee_name', 'consignee_address', 'consignee_email', 'consignee_mobile', 'consignee_city', 'consignee_province', 'consignee_barangay', 'consignee_building_type', 'merchant_name', 'merchant_address', 'merchant_email', 'merchant_mobile', 'merchant_city', 'merchant_province', 'driver_id', 'tracking_number', 'qr_code']);
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->date('pickup_date');
            $table->text('comments')->nullable();
        });
    }
};
