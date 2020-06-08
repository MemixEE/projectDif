@extends('layouts.app')

@section('content')
	<h1>DEPRECIACIONES</h1>
	<a href="{{ route('depretiations.create') }}"><button>Añadir activo</button> </a>

	<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Numuero de inventario</th>
            <th>tipo</th>
            <th>descripcion</th>
            <th>monto original</th>
            <th>vida util</th>
            <th>porcenjate</th>
            <th>total</th>
            <th>por depreciar</th>
            <th>depreciacion acumulada</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($depreciations as $depreciation)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $depreciation->id_activofijo }}</td>
            <td>{{ $depreciation->tipo }}</td>
            <td>{{ $depreciation->descripcion }}</td>
            <td>{{ $depreciation->montoOriginal }}</td>
            <td>{{ $depreciation->vidaUtil }}</td>
            <td>{{ $depreciation->porcenjate }}</td>
            <td>{{ $depreciation->total }}</td>
            <td>{{ $depreciation->porDepreciar }}</td>
            <td>{{ $depreciation->depreciacionAc}}</td>
            <td>
                <form action="{{ route('depretiations.destroy',$depreciation->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('depretiations.edit',$depreciation->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection