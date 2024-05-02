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
        Schema::create('listing_inventory_items', function (Blueprint $table) {
            $table->id();
            $table->string('listing_id')->nullable();
            $table->string('sku')->nullable();
            $table->string('offer_id')->nullable();
            $table->string('location_availability_quantity')->nullable();
            $table->string('condition')->nullable();
            $table->string('product_title')->nullable();
            $table->longtext('product_description')->nullable();
            $table->string('product_brand')->nullable();
            $table->longtext('product_aspects')->nullable();
            $table->string('product_mpn')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_inventory_items');
    }
};
