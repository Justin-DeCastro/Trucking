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
        Schema::create('rubixes', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('transport_mode');
            $table->string('shipping_type');
            $table->string('delivery_type');
            $table->string('journey_type');
            $table->string('consignee_name');
            $table->string('consignee_address');
            $table->string('consignee_email');
            $table->string('consignee_mobile');
            $table->string('consignee_city');
            $table->string('consignee_province');
            $table->string('consignee_barangay');
            $table->string('consignee_building_type');
            $table->string('merchant_name');
            $table->string('merchant_address');
            $table->string('merchant_email');
            $table->string('merchant_mobile');
            $table->string('merchant_city');
            $table->string('merchant_province');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rubixes');
    }
};
