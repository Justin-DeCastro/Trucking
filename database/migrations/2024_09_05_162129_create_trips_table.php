<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('arrival_proof')->nullable(); // Store file path for arrival proof
            $table->enum('trip_completion', ['Returned Successfully', 'Pending']);
            $table->enum('tag', ['POD Return']); // Add other tags as necessary
            $table->enum('close_trip', ['Mark Trip as Successful', 'Pending']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
