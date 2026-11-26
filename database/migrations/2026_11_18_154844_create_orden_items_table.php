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
        Schema::create('orden_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('orden_id')->index('fk_1');
            $table->integer('prenda_id')->index('fk_2');
            $table->decimal('precio', 10)->comment('Precio congelado, sin ISV');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_items');
    }
};
