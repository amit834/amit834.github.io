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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('legacy_order_id')->nullable();
            $table->string('creation_date')->nullable();
            $table->string('last_modified_date')->nullable();
            $table->string('order_fulfillment_status')->nullable();
            $table->string('order_payment_status')->nullable();
            $table->string('seller_id')->nullable();
            $table->string('ebay_collect_and_remit_tax')->nullable();
            $table->string('sales_record_reference')->nullable();
            $table->string('total_fee_basis_amount_value')->nullable();
            $table->string('total_fee_basis_amount_value_currency')->nullable();
            $table->string('total_market_place_fee_value')->nullable();
            $table->string('total_market_place_fee_currency')->nullable();
            $table->enum('connection_type', ['Ebay', 'Amazon', 'Google', 'Nothing'])->default('Nothing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
