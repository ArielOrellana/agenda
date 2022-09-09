<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    protected $table='gastos';
    protected $primaryKey='id';
    protected $fillable=['descripcion','precio','id_anio','id_mes'];
    public function Mes()
    {
    	return $this->belongsTo(Categoria::class,'id_mes','id');
    }
    public function Anios()
    {
    	return $this->belongsTo(Categoria::class,'id_anio','id');
    }
}

