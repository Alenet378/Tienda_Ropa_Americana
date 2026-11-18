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
        Schema::create('costos_prenda', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('prenda_id')->unique('prenda_id');
            $table->decimal('costo', 10)->comment('Costo asignado en Lempiras');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costos_prenda');
    }
};
