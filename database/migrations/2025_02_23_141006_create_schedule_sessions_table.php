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
        Schema::create('schedule_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('category_sesi')->nullable();
            $table->string('title_ses')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('room')->nullable();
            $table->string('moderator')->nullable();
            $table->text('panelist')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_sessions');
    }
};
