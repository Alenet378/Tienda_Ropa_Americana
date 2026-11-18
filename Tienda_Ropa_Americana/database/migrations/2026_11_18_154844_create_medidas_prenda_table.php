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
        Schema::create('medidas_prenda', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('prenda_id')->unique('prenda_id');
            $table->decimal('hombro', 10)->nullable()->comment('cm');
            $table->decimal('pecho', 10)->nullable()->comment('cm');
            $table->decimal('cintura', 10)->nullable()->comment('cm');
            $table->decimal('largo', 10)->nullable()->comment('cm');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medidas_prenda');
    }
};
