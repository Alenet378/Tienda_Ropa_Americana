<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fardo extends Model
{
    protected $table = 'fardos';

    protected $fillable = [
        'proveedor_id', 'codigo', 'costo_usd', 'tipo_cambio',
        'costos_adicionales', 'peso', 'cantidad_estimada', 'fecha_llegada',
    ];

    protected function casts(): array
    {
        return [
            'fecha_llegada' => 'date',  
        ];
    }

    // Un fardo viene de un proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

    // Un fardo contiene muchas prendas
    public function prendas()
    {
        return $this->hasMany(Prenda::class, 'fardo_id');
    }

    // Costos registrados de las prendas de este fardo
    public function costos()
    {
        return $this->hasMany(CostoPrenda::class, 'fardo_id');
    }
}