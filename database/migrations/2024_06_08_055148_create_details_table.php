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
            $table->string('adiciones');
            $table->text('comentarios');
            $table->integer('cantidad');
            // $table->foreignId("adicion_id")
            // ->nullable()
            // ->constrained(
            //     table: 'adicions', indexName: 'id'
            // )
            // ->onDelete('cascade')
            // ->onUpdate('cascade');

            $table->foreignId('orden_id')
            ->nullable()
            ->constrained(
                table: 'orders', indexName: 'id'
            )
            ->onDelete('cascade')
            ->onUpdate('cascade');

            
            $table->foreignId('admin_id')
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
        Schema::dropIfExists('detail_orders');
    }
};
