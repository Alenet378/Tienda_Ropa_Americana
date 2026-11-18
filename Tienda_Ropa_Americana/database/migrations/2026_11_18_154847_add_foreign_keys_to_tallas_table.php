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
        Schema::table('tallas', function (Blueprint $table) {
            $table->foreign(['grupo_talla_id'], 'fk_1')->references(['id'])->on('grupos_talla')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tallas', function (Blueprint $table) {
            $table->dropForeign('fk_1');
        });
    }
};
