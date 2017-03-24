@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <table>
            <thead>
              <th>Natal</th>
              <th>Idioma</th>
              <th>Traduccion</th>
              <th>categoria</th>
              <th>acciones</th>
            </thead>
            @foreach($expresiones as $i)
              <tr>
                <td>{{ $i->materna }}</td>
                <td>{{ $i->idioma }}</td>
                <td>{{ $i->expresion }}</td>
                <td>{{ $i->categoria }}</td>
                <td></td>
              </tr>
            @endforeach
          </table>
        </div>
    </div>
</div>
@endsection
