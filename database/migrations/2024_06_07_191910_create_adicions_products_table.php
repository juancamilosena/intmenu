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
        Schema::create('adicions_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        
        $table->unsignedBigInteger('adicion_id');

        $table->foreign('adicion_id')
        ->references('id')
        ->on('adicions')
        ->onDelete('cascade')
        ->onUpdate('cascade');


        $table->unsignedBigInteger('product_id');

        $table->foreign('product_id')
        ->references('id')
        ->on('products')
        ->onDelete('cascade')
        ->onUpdate('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adicions_products');
    }
};
