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
        Schema::create('g_d_r_accountings', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('particulars');
            $table->string('payment_amount');
            $table->string('payment_channel');
            $table->string('proof_of_payment');
            $table->string('notes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g_d_r_accountings');
    }
};
