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
        Schema::table('study_session', function (Blueprint $table) {
            $table->string('schedule_id');
            $table->foreign('schedule_id')->references('schedule_id')->on('schedule')->index('study_session_schedule_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('study_session', function (Blueprint $table) {
            $table->dropForeign('study_session_schedule_id');
            
            $table->dropColumn('schedule_id');
        });
    }
};