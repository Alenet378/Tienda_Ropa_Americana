<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPrenda extends Model
{
    protected $table = 'estados_prenda';
    public $timestamps = false;

    protected $fillable = ['nombre'];

public function prendas()
{
    return $this->hasMany(Prenda::class, 'estado_id');   
}
}