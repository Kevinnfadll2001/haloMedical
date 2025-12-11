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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->string('passenger_name');
            $table->string('first_name');      // new
            $table->string('last_name');       // new
            $table->string('phone_number');    // new
            $table->string('level_of_service');
            $table->dateTime('pickup_date');
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
