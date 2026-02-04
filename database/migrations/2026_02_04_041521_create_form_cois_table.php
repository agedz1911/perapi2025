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
        Schema::create('form_cois', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institution');
            $table->string('email');
            $table->json('presentation_titles'); // Menyimpan multiple titles sebagai JSON
            $table->boolean('no_conflict')->default(true);
            $table->boolean('has_conflict')->default(false);
            $table->text('conflict_description')->nullable();
            $table->string('have_consultant')->nullable();
            $table->string('have_research_grant')->nullable();
            $table->string('have_speaker_honorarium')->nullable();
            $table->string('have_ownership')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_cois');
    }
};
