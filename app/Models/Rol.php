<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Nombre de la Tabla
    protected $table = 'roles';
    //Como esta tabla no tiene created_at ni update_at lo quitamos asi no da errores
    public $timestamps = false;
    //Son las columnas que se pueden llenar con el create y update, no incluye  ID ni las fechas
    //automaticas
    protected $fillable = ['nombre'];

    // Un rol tiene muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'rol_id');
    }
}


