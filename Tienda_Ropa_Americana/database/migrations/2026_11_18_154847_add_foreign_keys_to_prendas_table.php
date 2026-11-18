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
        Schema::table('prendas', function (Blueprint $table) {
            $table->foreign(['fardo_id'], 'fk_1')->references(['id'])->on('fardos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['drop_id'], 'fk_2')->references(['id'])->on('drops_semanales')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['marca_id'], 'fk_3')->references(['id'])->on('marcas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_prenda_id'], 'fk_4')->references(['id'])->on('tipos_prenda')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['talla_id'], 'fk_5')->references(['id'])->on('tallas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['condicion_id'], 'fk_6')->references(['id'])->on('condiciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['estado_id'], 'fk_7')->references(['id'])->on('estados_prenda')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prendas', function (Blueprint $table) {
            $table->dropForeign('fk_1');
            $table->dropForeign('fk_2');
            $table->dropForeign('fk_3');
            $table->dropForeign('fk_4');
            $table->dropForeign('fk_5');
            $table->dropForeign('fk_6');
            $table->dropForeign('fk_7');
        });
    }
};
