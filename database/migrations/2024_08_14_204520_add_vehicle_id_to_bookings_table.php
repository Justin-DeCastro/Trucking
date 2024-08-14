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
            // Add the foreign key column
            $table->unsignedBigInteger('vehicle_id')->nullable();

            // Define the foreign key constraint
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles')
                ->onDelete('set null'); // or 'cascade' depending on your requirements
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['vehicle_id']);

            // Drop the column
            $table->dropColumn('vehicle_id');
        });
    }
};
