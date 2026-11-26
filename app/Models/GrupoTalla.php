<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoTalla extends Model
{
    protected $table = 'grupos_talla';
    public $timestamps = false;

    protected $fillable = ['nombre'];

    public function tallas()
    {
        return $this->hasMany(Talla::class, 'grupo_talla_id');
    }
    public function tiposPrenda()
    {
        return $this->hasMany(TipoPrenda::class, 'grupo_talla_id');
    }
}