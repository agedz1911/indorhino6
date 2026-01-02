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
        Schema::create('important_dates', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('date')->nullable();
            $table->json('date_end')->nullable();
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
        Schema::dropIfExists('important_dates');
    }
};
