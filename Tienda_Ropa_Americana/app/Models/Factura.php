<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    // La tabla no tiene created_at ni updated_at (usa fecha_emision)
    public $timestamps = false;

    protected $fillable = [
        'orden_id', 'cai_id', 'numero', 'rtn_cliente', 'nombre_cliente',
        'importe_gravado', 'importe_exento', 'isv_15', 'total',
        'estado', 'fecha_emision',
    ];

    protected function casts(): array
    {
        return [
            'importe_gravado' => 'decimal:2',
            'importe_exento'  => 'decimal:2',
            'isv_15'          => 'decimal:2',
            'total'           => 'decimal:2',
            'fecha_emision'   => 'datetime',
        ];
    }

    public function orden()
    {
        return $this->belongsTo(Orden::class, 'orden_id');
    }

    public function cai()
    {
        return $this->belongsTo(Cai::class, 'cai_id');
    }

    // Una factura tiene varias líneas de detalle
    public function detalles()
    {
        return $this->hasMany(FacturaDetalle::class, 'factura_id');
    }
}