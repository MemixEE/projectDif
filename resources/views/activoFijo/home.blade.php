@extends('layouts.app')

@section('content')
<h1>Inventario</h1>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
<a href="{{ route('activoFijo.create') }}"><button>Añadir activo</button> </a>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Tipo</th>
			<th>Descripcion</th>
			<th>No de Serie</th>
			<th>Resguardo</th>
			<th>Valor de adquisicion</th>
			<th>Verificado</th>
			<th>No de Trabajador</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($activoF as $activos)
		<tr>

			<td>{{$loop->iteration}}</td>
			<td>{{ $activos->tipo }}</td>
			<td>{{ $activos->descripcion }}</td>
			<td>{{ $activos->numSerie }}</td>
			<td>{{ $activos->resguardo }}</td>
			<td>${{ $activos->valorAdqui }}</td>
			<td>
				@if( $activos->verificado ===1 )
					SI
				@else
					NO
				@endif
			</td>
			<td>{{ $activos->id_trabajador }}</td>
			<td>
				<form action="{{ route('activoFijo.destroy',$activos->id) }}" method="POST">

                    <a href="{{ route('activoFijo.edit',$activos->id) }}"><input type="button" value="Editar"></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" >Borrar</button>
                </form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
