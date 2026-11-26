<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'tallas';

    // La tabla no tiene created_at ni updated_at
    public $timestamps = false;

    // Columnas que se pueden guardar con create()/update()
    protected $fillable = ['grupo_talla_id', 'nombre', 'orden'];

    public function prendas()
    {
        return $this->hasMany(Prenda::class, 'talla_id');
    }
    public function grupoTalla()
    {
        return $this->belongsTo(GrupoTalla::class, 'grupo_talla_id');
    }
}