@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <table>
        <thead>
          <th>Idioma</th>
          <th>Editar</th>
          <th>Borrar</th>
        </thead>
        @foreach($idiomas as $key)
          <tr>
            <td>{{ $key->idioma }}</td>
            <td><a href="idiomas/edit/{{$key->id}}">Editar</a></td>
            <td><a href="idiomas/borra/{{$key->id}}">Borrar</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

<div class="fixed-action-btn">
  <a href="{{ url('idiomas/add') }}" class="btn-floating btn-large blue"><i class="material-icons">add</i></a>
</div>
@endsection
