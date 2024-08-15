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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('delivery_id');
            $table->unsignedBigInteger('expedition_id');
            $table->unsignedBigInteger('payment_id');
            $table->decimal('delivery_service_fee', 10);
            $table->decimal('expedition_service_fee', 10);
            $table->decimal('payment_service_fee', 10);
            $table->decimal('sub_total', 10)->nullable();
            $table->decimal('total_payment', 10)->nullable();
            $table->text('sender_address');
            $table->text('destination_address');
            $table->enum('status', ['ordered', 'confirmed', 'delivered', 'finished', 'canceled']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
            $table->foreign('expedition_id')->references('id')->on('expeditions');
            $table->foreign('payment_id')->references('id')->on('payments');
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
