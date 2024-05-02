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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('listing_id')->nullable();
            $table->string('market_place_id')->nullable();
            $table->enum('status', ['Pending', 'Active', 'Draft'])->default('Pending')->nullable();
            $table->enum('connection_type', ['Ebay', 'Amazon', 'Google', 'Nothing'])->default('Nothing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing');
    }
};
