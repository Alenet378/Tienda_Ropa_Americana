<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';

    const UPDATED_AT = null;

    protected $fillable = [
        'cliente_id', 'estado', 'departamento', 'ciudad', 'direccion',
        'subtotal', 'isv', 'flete', 'total',
    ];

    protected function casts(): array
    {
        return [
            'subtotal' => 'decimal:2',
            'isv'      => 'decimal:2',
            'flete'    => 'decimal:2',
            'total'    => 'decimal:2',
        ];
    }

    // Una orden pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Una orden tiene varias prendas
    public function items()
    {
        return $this->hasMany(OrdenItem::class, 'orden_id');
    }

    // Una orden genera una factura
    public function factura()
    {
        return $this->hasOne(Factura::class, 'orden_id');
    }
}