<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['usuario_id', 'dni', 'rtn', 'telefono'];

    // Un cliente pertenece a un usuario 
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Un cliente tiene una ficha de medidas
    public function medidas()
    {
        return $this->hasOne(MedidaCliente::class, 'cliente_id');
    }

    // Un cliente tiene un solo carrito
    public function carrito()
    {
        return $this->hasOne(Carrito::class, 'cliente_id');
    }

    // Un cliente puede tener muchas órdenes (su historial de compras)
    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'cliente_id');
    }
}