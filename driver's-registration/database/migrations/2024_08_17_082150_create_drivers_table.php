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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->integer('plate_number')->nullable();
            $table->string('driver_name')->nullable();
            $table->integer('driver_phone_number')->nullable();
            $table->string('driver_email')->nullable();
            $table->string('gender')->nullable();
            $table->foreignId('user_id')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
