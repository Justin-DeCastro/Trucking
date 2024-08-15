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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->date('date'); // Date of the loan
            $table->string('borrower'); // Name of the borrower
            $table->decimal('initial_amount', 15, 2); // Initial amount of the loan
            $table->decimal('interest', 5, 2); // Interest rate
            $table->decimal('installment_payment', 15, 2); // Payment amount per installment
            $table->string('payment_terms'); // Terms of payment
            $table->decimal('total_amount', 15, 2); // Total amount to be paid
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
