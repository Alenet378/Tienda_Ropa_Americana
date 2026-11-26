<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    // Nombre de la tabTabla que usa este modelo
    protected $table = 'usuarios';

    protected $fillable = ['rol_id', 'nombre', 'correo', 'password', 'activo'];

    // Escondemos las columnas de la contraseña y el recordar sesion
    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',   // cifra la contraseña con bcrypt al guardarla
            'activo' => 'boolean',  // la entrega como true/false y no como 1/0
        ];
    }

    //Relaciones de Eloquent
    //Son funciones que le enseñan al modelo cómo llegar a los 
    // datos de otra tabla con la que está conectado.

    // Aqui se arma la relacion, con la tabla roles y usuario
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'usuario_id');
    }
}