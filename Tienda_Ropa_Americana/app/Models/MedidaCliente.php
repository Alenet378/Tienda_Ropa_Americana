<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class MedidaCliente extends Model
{
    protected $table = 'medidas_cliente';

    // Esta tabla solo tiene updated_at, no created_at
    const CREATED_AT = null;

    protected $fillable = ['cliente_id', 'hombro', 'pecho', 'cintura', 'largo'];

    // Las medidas pertenecen a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}