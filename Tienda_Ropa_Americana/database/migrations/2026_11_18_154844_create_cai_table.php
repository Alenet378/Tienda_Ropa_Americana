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
        Schema::create('cai', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('codigo_cai', 50)->unique('codigo_cai');
            $table->char('establecimiento', 3);
            $table->char('punto_emision', 3);
            $table->char('tipo_documento', 2)->default('01');
            $table->char('tienda', 3)->default('001');
            $table->integer('rango_inicial');
            $table->integer('rango_final');
            $table->integer('correlativo_actual');
            $table->date('fecha_limite');
            $table->boolean('activo')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cai');
    }
};
