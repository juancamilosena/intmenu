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
            $table->string("estado")->nullable();
            $table->timestamp('fecha_de_pedido');
            //foraneas

            $table->unsignedBigInteger('table_id')
            ->nullable();
            $table->foreign('table_id')
            ->references('id')
            ->on('tables')
            ->onDelete('cascade')
            ->onUpdate('cascade');

             $table->foreignId('detail_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
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
