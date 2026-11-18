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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('usuario_id')->unique('usuario_id');
            $table->string('dni', 13)->unique('dni');
            $table->string('rtn', 14)->nullable()->unique('rtn')->comment('NULL = consumidor final');
            $table->string('telefono', 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
