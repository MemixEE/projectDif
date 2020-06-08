@extends('layouts.app')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('trabajadores.create') }}"> Create New Product</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>responsable</th>
            <th>puesto</th>
            <th>departamento</th>
            <th>tipo de contrato</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($traba as $trabajadr)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$trabajadr -> responsable}}</td>
            <td>{{$trabajadr -> puesto}}</td>
            <td>{{$trabajadr -> departamento}}</td>
            <td>{{$trabajadr -> tipoDeContrato}}</td>
            <td>
              <form action="{{ route('trabajadores.destroy',$trabajadr->id) }}" method="POST">

                  <a class="btn btn-primary" href="{{ route('trabajadores.edit',$trabajadr->id) }}">Edit</a>

                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach
    </table>

{!! $traba->links() !!}

@endsection