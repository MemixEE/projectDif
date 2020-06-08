<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depretiation extends Model
{
	protected $table='depretiations';
	protected $fillable = [
    'id_activofijo',
    'tipo',
    'descripcion',
    'montoOriginal',
    'vidaUtil',
    'porcenjate',
    'total',
    'porDepreciar',
    'depreciacionAc',
    'id_activofijo'];

    public function activo()
  {
      return $this-> belongsTo(ActivoFijoModel::class,'id_activofijo');
  }
}
