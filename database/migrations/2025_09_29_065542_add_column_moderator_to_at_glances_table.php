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
        Schema::table('at_glances', function (Blueprint $table) {
            $table->string('moderator')->after('no_urut')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('at_glances', function (Blueprint $table) {
            $table->dropColumn('moderator');
        });
    }
};
