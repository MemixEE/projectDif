@extends('layouts.app')

@section('content')
<style type="text/css">
	table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
}
</style>
<table border="3">
	<thead>
		<tr>
			<th>ID</th>
			<th>No de Inventario</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>No de Serie</th>
			<th>Resguardo</th>
			<th>Valor de adquisicion</th>
			<th>Verificado</th>
			<th>No de Trabajador</th>
			<th>Fecha de baja</th>
		</tr>
	</thead>
	<tbody>
		@foreach($activoBi as $activos)
		<tr>

			<td>{{$loop->iteration}}</td>
			<td>{{ $activos->numInventario_bi }}</td>
			<td>{{ $activos->tipo_bi }}</td>
			<td>{{ $activos->descripcion_bi }}</td>
			<td>{{ $activos->numSerie_bi }}</td>
			<td>{{ $activos->resguardo_bi }}</td>
			<td>${{ $activos->valorAdqui_bi }}</td>
			<td>
				@if( $activos->verificado_bi ===1 )
					SI
				@else
					NO
				@endif
			</td>
			<td>{{ $activos->numTrabajador_bi }}</td>
			<td>
				{{$activos->created_at}}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection