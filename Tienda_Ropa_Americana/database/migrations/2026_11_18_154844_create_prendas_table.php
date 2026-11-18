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
        Schema::create('prendas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('fardo_id')->index('fk_1');
            $table->integer('drop_id')->nullable()->index('fk_2');
            $table->integer('marca_id')->index('fk_3');
            $table->integer('tipo_prenda_id')->index('fk_4');
            $table->integer('talla_id')->index('fk_5');
            $table->integer('condicion_id')->index('fk_6');
            $table->integer('estado_id')->index('fk_7');
            $table->string('sku', 30)->unique('sku');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->decimal('precio', 10);
            $table->date('fecha_ingreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prendas');
    }
};
