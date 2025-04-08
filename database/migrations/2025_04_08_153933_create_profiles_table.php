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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('first_name')->nullable();
            $table->unsignedBigInteger('nik')->nullable();
            $table->string('title')->nullable();
            $table->string('title_specialist')->nullable();
            $table->string('type')->nullable();
            $table->string('name_on_certificate')->nullable();
            $table->string('institution')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('phone_number')->nullable();
            $table->unsignedBigInteger('postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
