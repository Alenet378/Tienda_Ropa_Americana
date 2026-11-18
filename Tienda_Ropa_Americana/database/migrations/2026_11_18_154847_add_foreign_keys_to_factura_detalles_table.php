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
        Schema::table('factura_detalles', function (Blueprint $table) {
            $table->foreign(['factura_id'], 'fk_1')->references(['id'])->on('facturas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['prenda_id'], 'fk_2')->references(['id'])->on('prendas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('factura_detalles', function (Blueprint $table) {
            $table->dropForeign('fk_1');
            $table->dropForeign('fk_2');
        });
    }
};
