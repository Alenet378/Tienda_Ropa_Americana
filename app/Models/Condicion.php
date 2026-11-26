<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{

      //Nombre de la Tabla en la base de datos
    protected $table = 'condiciones';
    //Como esta tabla no tiene created_at ni update_at lo quitamos asi no da errores
    public $timestamps = false;
    //Son las columnas que se pueden llenar con el create y update, no incluye  ID ni las fechas
    //automaticas
    protected $fillable = ['nombre'];


public function prendas()
{
    return $this->hasMany(Prenda::class, 'condicion_id');   
}
}