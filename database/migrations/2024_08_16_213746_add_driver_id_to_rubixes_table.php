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
        Schema::table('rubixes', function (Blueprint $table) {
            $table->unsignedBigInteger('rider_id'); // Ensure the column type matches the `id` column in `users`
            $table->foreign('rider_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rubixes', function (Blueprint $table) {
            $table->dropForeign(['rider_id']);
            $table->dropColumn('rider_id');
        });
    }
};
