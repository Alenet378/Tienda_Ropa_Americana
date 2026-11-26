<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarritoItem extends Model
{
    protected $table = 'carrito_items';

    const UPDATED_AT = null;

    protected $fillable = ['carrito_id', 'prenda_id', 'bloqueada_hasta'];

    protected function casts(): array
    {

        return ['bloqueada_hasta' => 'datetime'];
    }

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'carrito_id');
    }

    public function prenda()
    {
        return $this->belongsTo(Prenda::class, 'prenda_id');
    }

    // true si ya pasaron los 15 minutos de bloqueo
    public function expirado(): bool
    {
        return $this->bloqueada_hasta->isPast();
    }
}