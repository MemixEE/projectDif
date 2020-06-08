@extends('layouts.app')

@section('content')

	<h1>AGREGAR</h1>
	<form action="{{ route('depretiations.update', $depretiation->id) }}" method="POST">
    @csrf @method('PATCH')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de inventario:</strong>
                <input type="text" name="id_activofijo" class="form-control" placeholder="Name"  value="{{$depretiation->id_activofijo}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tipo:</strong>
                <input type="text" class="form-control" name="tipo" value="{{$depretiation->tipo}}">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>descripcion:</strong>
                <input type="text" name="descripcion" value="{{$depretiation->descripcion}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>monto original:</strong>
                <input type="number" name="montoOriginal" value="{{$depretiation->montoOriginal}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>vida util:</strong>
                <input type="number" name="vidaUtil" value="{{$depretiation->vidaUtil}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>porcentaje:</strong>
                <input type="number" name="porcenjate" value="{{$depretiation->porcenjate}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>total:</strong>
                <input type="number" name="total" value="{{$depretiation->total}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>por depreciar:</strong>
                <input type="number" name="porDepreciar" value="{{$depretiation->porDepreciar}}">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>depreciacion acumulada:</strong>
                <input type="number" name="depreciacionAc" value="{{$depretiation->depreciacionAc}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection