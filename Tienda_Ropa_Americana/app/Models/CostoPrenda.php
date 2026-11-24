<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CostoPrenda extends Model
{
    protected $table = 'costos_prenda';

    // Solo tiene created_at, no updated_at
    const UPDATED_AT = null;

    protected $fillable = ['fardo_id', 'prenda_id', 'costo'];

    public function prenda()
    {
        return $this->belongsTo(Prenda::class, 'prenda_id');
    }

    public function fardo()
    {
        return $this->belongsTo(Fardo::class, 'fardo_id');
    }
}