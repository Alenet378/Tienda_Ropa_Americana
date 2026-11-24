<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaDetalle extends Model
{
    protected $table = 'factura_detalles';


    public $timestamps = false;

    protected $fillable = ['factura_id', 'prenda_id', 'descripcion', 'precio'];

    protected function casts(): array
    {
        return ['precio' => 'decimal:2'];
    }

    public function factura()
    {
        return $this->belongsTo(Factura::class, 'factura_id');
    }

    public function prenda()
    {
        return $this->belongsTo(Prenda::class, 'prenda_id');
    }
}