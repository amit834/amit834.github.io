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
        Schema::create('order_line_items', function (Blueprint $table) {
            $table->id();
            $table->string('table_order_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('line_item_id')->nullable();
            $table->string('legacy_item_id')->nullable();
            $table->string('title')->nullable();
            $table->string('line_item_cost_value')->nullable();
            $table->string('line_item_cost_currency')->nullable();
            $table->string('quantity')->nullable();
            $table->string('sold_format')->nullable();
            $table->string('listing_market_place_id')->nullable();
            $table->string('purchase_market_place_id')->nullable();
            $table->string('line_item_fulfillment_status')->nullable();
            $table->string('total_value')->nullable();
            $table->string('total_currency')->nullable();
            $table->string('shipping_cost_value')->nullable();
            $table->string('shipping_cost_currency')->nullable();
            $table->string('item_location')->nullable();
            $table->string('item_location_country_code')->nullable();
            $table->string('item_location_postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_line_items');
    }
};
