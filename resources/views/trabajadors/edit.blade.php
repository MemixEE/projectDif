@extends('layouts.app')

@section('content')

	<h1>Editar registro</h1>
<form method="POST" action="{{ route('trabajadores.update', $trabajador->id)}}">
	@csrf @method('PATCH')
			 <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre trabajador:</strong>
                <input type="text" name="responsable" value="{{$trabajador->responsable}}"class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>puesto:</strong>
                <input type="text" name="puesto" value="{{ $trabajador->puesto }}"class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>departamento:</strong>
                <input type="text" name="departamento"  value="{{ $trabajador->departamento }}"class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de contrato:</strong>
                <input type="text" name="tipoDeContrato" value="{{ $trabajador->tipoDeContrato }}"class="form-control" placeholder="Name">
            </div>
        </div>

			<button>Actualizar</button>
		</form>

@endsection
