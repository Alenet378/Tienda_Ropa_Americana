<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenItem extends Model
{
    protected $table = 'orden_items';


    public $timestamps = false;

    protected $fillable = ['orden_id', 'prenda_id', 'precio'];

    protected function casts(): array
    {
        return ['precio' => 'decimal:2'];
    }

    public function orden()
    {
        return $this->belongsTo(Orden::class, 'orden_id');
    }

    public function prenda()
    {
        return $this->belongsTo(Prenda::class, 'prenda_id');
    }
}