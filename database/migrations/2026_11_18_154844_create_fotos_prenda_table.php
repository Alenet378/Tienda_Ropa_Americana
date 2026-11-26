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
        Schema::create('fotos_prenda', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('prenda_id')->index('fk_1');
            $table->string('ruta');
            $table->tinyInteger('orden')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos_prenda');
    }
};
