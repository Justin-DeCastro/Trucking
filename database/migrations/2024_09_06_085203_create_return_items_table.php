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
        Schema::create('return_items', function (Blueprint $table) {
            $table->id();
            $table->date('return_date');
            $table->string('product_name');
            $table->text('return_reason');
            $table->integer('return_quantity');
            $table->string('condition');

            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null'); // Assuming drivers are users
            $table->string('proof_of_return');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_items');
    }
};
