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
        Schema::table('facturas', function (Blueprint $table) {
            $table->foreign(['cai_id'], 'fk_1')->references(['id'])->on('cai')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['orden_id'], 'fk_2')->references(['id'])->on('ordenes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->dropForeign('fk_1');
            $table->dropForeign('fk_2');
        });
    }
};
