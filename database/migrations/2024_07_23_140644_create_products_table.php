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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedMediumInteger('stok');
            $table->text('description');
            $table->decimal('price', 10);
            $table->string('photo');
            $table->unsignedBigInteger('seller_id');
            $table->enum('status', ['ready', 'out_of_stock', 'unready']);
            $table->timestamps();
            $table->foreign('seller_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
