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
        Schema::create('order_shipping_detail', function (Blueprint $table) {
            $table->id();
            $table->string('table_order_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('ful_fillment_instructions_type')->nullable();
            $table->string('min_estimated_delivery_date')->nullable();
            $table->string('max_estimated_delivery_date')->nullable();
            $table->string('supported_fulfillment')->nullable();
            $table->string('full_name')->nullable();
            $table->string('address_line')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('primary_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('carrier_code')->nullable();
            $table->string('service_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_shipping_detail');
    }
};
