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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cliente_id')->index('fk_1');
            $table->string('estado', 20)->comment('pagada, enviada, entregada, cancelada');
            $table->string('departamento', 100);
            $table->string('ciudad', 100);
            $table->string('direccion');
            $table->decimal('subtotal', 10);
            $table->decimal('isv', 10);
            $table->decimal('flete', 10)->default(0);
            $table->decimal('total', 10);
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
