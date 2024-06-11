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
        Schema::create('detail_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('detail_id');

            $table->foreign('detail_id')
            ->references('id')
            ->on('details')
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
        Schema::dropIfExists('details_produtcs');
    }
};
