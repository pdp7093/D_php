<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name', 50);
            $table->integer('p_price');
            $table->string('p_weight',60);
            $table->string('p_image');
            $table->string('p_descp');
            $table->integer('qty');
            $table->enum('status', ['Instock', 'Outstock'])->default('Instock');
            $table->foreignId('cate_id') // Foreign key field
            ->constrained('categories') // References `id` on `categories`
            ->onDelete('cascade');
            $table->timestamps();
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
