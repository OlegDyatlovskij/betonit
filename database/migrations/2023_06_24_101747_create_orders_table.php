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
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('state', ['Принят', 'В обработке', 'В ожидании', 'Отклонён'])->default('В ожидании');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE');
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
