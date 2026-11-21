<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carritos';

    const UPDATED_AT = null;

    protected $fillable = ['cliente_id'];

    // Un carrito pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Un carrito tiene muchas prendas bloqueadas
    public function items()
    {
        return $this->hasMany(CarritoItem::class, 'carrito_id');
    }
}