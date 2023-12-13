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
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('instrument_id');
        $table->timestamp('reserved_at')->nullable();
        $table->timestamp('returned_at')->nullable();
        $table->timestamps();

        // Define foreign key constraints if necessary
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('instrument_id')->references('id')->on('instruments')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
