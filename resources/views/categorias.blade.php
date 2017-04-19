@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <table>
        <thead>
          <th>Categoría</th>
          <th>Editar</th>
          <th>Borrar</th>
        </thead>
        @foreach($categorias as $key)
          <tr>
            <td>{{ $key->categoria }}</td>
            <td><a href='categorias/edit/{{$key->id}}'>Editar</a></td>
            <td><a href='categorias/borra/{{$key->id}}'>Borrar</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

<div class="fixed-action-btn">
  <a href="{{ url('categorias/add') }}" class="btn-floating btn-large blue"><i class="material-icons">add</i></a>
</div>
@endsection
