<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPrenda extends Model
{
    protected $table = 'tipos_prenda';
    public $timestamps = false;

    protected $fillable = ['grupo_talla_id', 'nombre'];

    public function prendas()
    {
        return $this->hasMany(Prenda::class, 'tipo_prenda_id');
    }
    public function grupoTalla()
    {
        return $this->belongsTo(GrupoTalla::class, 'grupo_talla_id');
    }
}