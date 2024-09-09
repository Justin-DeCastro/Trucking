<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTripCloseTripEnum extends Migration
{
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            // Drop the old enum column
            $table->dropColumn('close_trip');

            // Add the new enum column with updated values
            $table->enum('close_trip', ['Closed Trip', 'Pending'])->default('Pending');
        });
    }

    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            // Rollback to the old enum values
            $table->dropColumn('close_trip');

            // Re-add the old enum column
            $table->enum('close_trip', ['Mark Trip as Successful', 'Pending'])->default('Pending');
        });
    }
}
