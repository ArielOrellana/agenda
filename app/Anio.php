<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anio extends Model
{
    protected $table='anios';
    protected $primaryKey='id';
    protected $fillable=['anios'];
}
