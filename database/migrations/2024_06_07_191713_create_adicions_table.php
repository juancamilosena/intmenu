<?php

use App\Models\Adicion;
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
        Schema::create('adicions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->float("precio");
        });
        // Adicion::create([
        //     'name' => 'primera',
        //     'precio_adicion' => '50000.8',
        //     'disponibilidad' => true,
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adicions');
    }
};
