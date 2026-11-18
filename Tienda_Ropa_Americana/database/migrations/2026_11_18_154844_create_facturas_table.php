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
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('orden_id')->unique('orden_id');
            $table->integer('cai_id')->index('fk_1');
            $table->string('numero', 19)->unique('numero');
            $table->string('rtn_cliente', 14)->nullable();
            $table->string('nombre_cliente');
            $table->decimal('importe_gravado', 10);
            $table->decimal('importe_exento', 10)->default(0);
            $table->decimal('isv_15', 10);
            $table->decimal('total', 10);
            $table->string('estado', 20);
            $table->dateTime('fecha_emision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
