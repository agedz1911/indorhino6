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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->json('hotel_name')->nullable();
            $table->json('distance')->nullable();
            $table->json('hotel_star')->nullable();
            $table->json('url')->nullable();
            $table->json('image')->nullable();
            $table->json('price')->nullable();
            $table->json('no_urut')->nullable();
            $table->json('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');
    }
};
