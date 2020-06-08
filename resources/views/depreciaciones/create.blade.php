@extends('layouts.app')

@section('content')

	<h1>AGREGAR</h1>
	<form action="{{ route('depretiations.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de inventario:</strong>
                <input type="text" name="id_activofijo" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tipo:</strong>
                <textarea class="form-control" style="height:150px" name="tipo" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>descripcion:</strong>mmmm
                <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>monto original:</strong>
                <textarea class="form-control" style="height:150px" name="montoOriginal" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>vida util:</strong>
                <textarea class="form-control" style="height:150px" name="vidaUtil" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>porcenjate:</strong>
                <textarea class="form-control" style="height:150px" name="porcenjate" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>total:</strong>
                <textarea class="form-control" style="height:150px" name="total" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>por depreciar:</strong>
                <textarea class="form-control" style="height:150px" name="porDepreciar" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>depreciacion acumulada:</strong>
                <textarea class="form-control" style="height:150px" name="depreciacionAc" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection