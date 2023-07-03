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
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('user_id');
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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_product_id_foreign');
            $table->dropForeign('orders_user_id_foreign'); 
        });
        Schema::dropIfExists('orders');
    }
};
