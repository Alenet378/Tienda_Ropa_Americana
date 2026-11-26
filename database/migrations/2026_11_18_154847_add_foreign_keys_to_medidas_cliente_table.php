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
        Schema::table('medidas_cliente', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'fk_1')->references(['id'])->on('clientes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medidas_cliente', function (Blueprint $table) {
            $table->dropForeign('fk_1');
        });
    }
};
