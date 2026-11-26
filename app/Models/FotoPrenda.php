<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoPrenda extends Model
{
    protected $table = 'fotos_prenda';

    // La tabla no tiene created_at ni updated_at
    public $timestamps = false;

    protected $fillable = ['prenda_id', 'ruta', 'orden'];

    public function prenda()
    {
        return $this->belongsTo(Prenda::class, 'prenda_id');
    }
}