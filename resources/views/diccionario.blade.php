@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <table>
            <thead>
              <th>Natal</th>
              <th>Traduccion</th>
              <th>Idioma</th>
              <th>categoria</th>
              <th>acciones</th>
            </thead>
            @foreach($expresiones as $i)
              <tr>
                <td>{{ $i->materna }}</td>
                <td>{{ $i->expresion }}</td>
                <td>{{ $i->idioma }}</td>
                <td>{{ $i->categoria }}</td>
                <td><a href="diccionario/edit/{{$i->id}}">Editar</a></td>
                <td><a href="diccionario/borra/{{$i->id}}">Borrar</a></td>
              </tr>
            @endforeach
          </table>
        </div>
    </div>
</div>

<div class="fixed-action-btn">
  <a href="{{ url('diccionario/add') }}" class="btn-floating btn-large blue"><i class="material-icons">add</i></a>
</div>
@endsection
