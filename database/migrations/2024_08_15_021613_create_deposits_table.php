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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->date('date');
            $table->string('particulars');
            $table->decimal('deposit_amount', 10, 2); // Adjust precision as needed
            $table->text('notes')->nullable(); // Nullable if not required
            $table->foreignId('withdraw_id')->constrained('withdraws')->onDelete('cascade'); // Foreign key to withdraws table
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
