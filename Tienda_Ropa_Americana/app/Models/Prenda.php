<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    protected $table = 'prendas';

    protected $fillable = [
        'fardo_id', 'drop_id', 'marca_id', 'tipo_prenda_id', 'talla_id',
        'condicion_id', 'estado_id', 'sku', 'nombre', 'descripcion',
        'precio', 'fecha_ingreso',
    ];

    protected function casts(): array
    {
        return [
            'precio'        => 'decimal:2',
            'fecha_ingreso' => 'date',
        ];
    }
    //Son funcioens donde aparece la prneda, o los llamados que hace la prenda de otras tablas
    //No es obligatorio ponerlos pero,  facilita el llamdo luego al llamar a las llaves foraneas
    public function fardo()      { return $this->belongsTo(Fardo::class, 'fardo_id'); }
    public function drop()       { return $this->belongsTo(DropSemanal::class, 'drop_id'); }
    public function marca()      { return $this->belongsTo(Marca::class, 'marca_id'); }
    public function tipoPrenda() { return $this->belongsTo(TipoPrenda::class, 'tipo_prenda_id'); }
    public function talla()      { return $this->belongsTo(Talla::class, 'talla_id'); }
    public function condicion()  { return $this->belongsTo(Condicion::class, 'condicion_id'); }
    public function estado()     { return $this->belongsTo(EstadoPrenda::class, 'estado_id'); }

    public function medidas() { return $this->hasOne(MedidaPrenda::class, 'prenda_id'); }
    public function costo()   { return $this->hasOne(CostoPrenda::class, 'prenda_id'); }
    public function fotos()   { return $this->hasMany(FotoPrenda::class, 'prenda_id'); }


    public function carritoItem()    { return $this->hasOne(CarritoItem::class, 'prenda_id'); }
    public function ordenItems()     { return $this->hasMany(OrdenItem::class, 'prenda_id'); }
    public function facturaDetalles(){ return $this->hasMany(FacturaDetalle::class, 'prenda_id'); }
}