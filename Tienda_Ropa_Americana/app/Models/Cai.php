<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cai extends Model
{
    protected $table = 'cai';

    public $timestamps = false;

    protected $fillable = [
        'codigo_cai', 'establecimiento', 'punto_emision', 'tipo_documento',
        'tienda', 'rango_inicial', 'rango_final', 'correlativo_actual',
        'fecha_limite', 'activo',
    ];

    protected function casts(): array
    {
        return [
            'fecha_limite' => 'date',
            'activo'       => 'boolean',
        ];
    }

    // Un CAI se usa en muchas facturas
    public function facturas()
    {
        return $this->hasMany(Factura::class, 'cai_id');
    }
}