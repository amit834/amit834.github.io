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
        Schema::create('order_buyer_detail', function (Blueprint $table) {
            $table->id();
            $table->string('table_order_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('tax_address_state')->nullable();
            $table->string('tax_address_postal_code')->nullable();
            $table->string('tax_address_country_code')->nullable();
            $table->string('full_name')->nullable();
            $table->string('registration_address_line')->nullable();
            $table->string('registration_address_city')->nullable();
            $table->string('registration_address_state')->nullable();
            $table->string('registration_address_postal_code')->nullable();
            $table->string('registration_address_country_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_buyer_detail');
    }
};
