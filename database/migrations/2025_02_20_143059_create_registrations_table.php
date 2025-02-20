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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('category_reg')->nullable();
            $table->string('wilayah_reg')->nullable();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('early_bird_reg')->nullable();
            $table->unsignedBigInteger('normal_reg')->nullable();
            $table->unsignedBigInteger('onsite_reg')->nullable();
            $table->boolean('is_Active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
