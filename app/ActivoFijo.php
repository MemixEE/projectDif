<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivoFijo extends Model
{
    protected $table='activofijo';
	protected $fillable = ['tipo', 'descripcion','numSerie','resguardo','valorAdqui','verificado','id_trabajador'];
}
