<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedidaPrenda extends Model
{
    protected $table = 'medidas_prenda';

    const CREATED_AT = null;

    protected $fillable = ['prenda_id', 'hombro', 'pecho', 'cintura', 'largo'];

    public function prenda()
    {
        return $this->belongsTo(Prenda::class, 'prenda_id');
    }
}