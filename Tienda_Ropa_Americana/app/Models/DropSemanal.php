<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropSemanal extends Model
{
    protected $table = 'drops_semanales';
    public $timestamps = false;

    protected $fillable = ['nombre', 'fecha_lanzamiento'];

    // Laravel recibe la fecha como un string, por eso hay que castearla y quede como fecha
    protected function casts(): array
    {
        return ['fecha_lanzamiento' => 'datetime'];
    }


public function prendas()
{
    return $this->hasMany(Prenda::class, 'drop_id');   
}
}