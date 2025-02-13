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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cate_id');
            $table->string('title');
            $table->text('content'); 
            $table->string('blog_image');
            $table->enum('status', ['draft', 'published'])->default('draft'); // Status
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
