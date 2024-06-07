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
        Schema::create('details', function (Blueprint $table) {

            $table->id();
            $table->integer('cantidad');
            $table->float('precio_unitario');
            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('admin_id');
            
            $table->foreign('orden_id')
            ->references('id')
            ->on('orders')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('admin_id')
            ->references('id')
            ->on('admins')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_orders');
    }
};
