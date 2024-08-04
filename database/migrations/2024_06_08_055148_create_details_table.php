<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('adicion_id')->nullable();

            $table->string('productname')->nullable();
            $table->string('adiciones')->nullable();
            $table->text('comentarios')->nullable();
            $table->integer('precio')->nullable();
            $table->integer('cantidad')->nullable(); 
            $table->timestamps();


            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('adicion_id')->references('id')->on('adicions')->onDelete('set null'); 
                       
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};

