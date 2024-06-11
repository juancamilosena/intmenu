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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();


            $table->timestamp('fecha_venta');
            $table->float('monto_del_dia');

            $table->unsignedBigInteger('detalle_id');

            // $table->foreign('detalle_id')
            // ->references('id')
            // ->on('details')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
