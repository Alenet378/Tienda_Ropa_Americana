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
        Schema::create('fardos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('proveedor_id')->index('fk_1');
            $table->string('codigo')->unique('codigo');
            $table->decimal('costo_usd', 10);
            $table->decimal('tipo_cambio', 10, 4);
            $table->decimal('costos_adicionales', 10)->default(0);
            $table->decimal('peso', 10);
            $table->integer('cantidad_estimada')->nullable();
            $table->date('fecha_llegada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fardos');
    }
};
