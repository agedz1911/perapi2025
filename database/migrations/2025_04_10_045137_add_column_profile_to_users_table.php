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
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable();
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
            $table->integer('postal_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('nik');
            $table->dropColumn('title');
            $table->dropColumn('title_specialist');
            $table->dropColumn('type');
            $table->dropColumn('name_on_certificate');
            $table->dropColumn('institution');
            $table->dropColumn('address');
            $table->dropColumn('country');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('phone_number');
            $table->dropColumn('postal_code');
        });
    }
};
