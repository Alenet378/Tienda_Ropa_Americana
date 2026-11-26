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
        Schema::table('fardos', function (Blueprint $table) {
            $table->foreign(['proveedor_id'], 'fk_1')->references(['id'])->on('proveedores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fardos', function (Blueprint $table) {
            $table->dropForeign('fk_1');
        });
    }
};
