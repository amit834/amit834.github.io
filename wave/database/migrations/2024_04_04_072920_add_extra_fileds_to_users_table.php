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
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('currency')->nullable();
            $table->enum('is_ebay_connection', ['enable','disable'])->default('disable')->nullable();
            $table->string('ebay_username')->nullable();
            $table->string('ebay_marketplace')->nullable();
            $table->longText('ebay_token')->nullable();
            $table->string('ebay_expires_in')->nullable();
            $table->longText('ebay_refresh_token')->nullable();
            $table->string('ebay_refresh_token_expires_in')->nullable();
            $table->string('phone_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
