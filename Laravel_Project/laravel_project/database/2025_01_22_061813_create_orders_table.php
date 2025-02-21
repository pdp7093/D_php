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
            $table->foreignId('pro_id') // Foreign key field
            ->constrained('products') // References `id` on `products`
            ->onDelete('cascade');
            $table->foreignId('cust_id') // Foreign key field
            ->constrained('customers') // References `id` on `customer`
            ->onDelete('cascade');
            $table->integer('o_qty');
            $table->string('p_weight',60);
            $table->integer('total_amount');
            $table->string('address');
            $table->enum('o_status', ['pending', 'deliverd'])->default('pending');
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
