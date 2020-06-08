<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
	protected $table='trabajadores';
    protected $fillable = ['responsable','puesto','departamento','tipoDeContrato'];

    public function activos()
    {
        return $this-> hasMany(ActivoFijo::class,'id_trabajador');
    }
}
