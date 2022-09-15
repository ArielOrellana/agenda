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
    	return $this->belongsTo(Mes::class,'id_mes','id');
    }
    public function Anios()
    {
    	return $this->belongsTo(Anio::class,'id_anio','id');
    }
    public function user()
    {
    	return $this->belongsTo(User::class,'id_user','id');
    }
}

