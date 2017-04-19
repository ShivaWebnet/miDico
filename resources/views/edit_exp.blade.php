@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/diccionario/mod/{{ $expresion->id }}" method="post">
    {{ csrf_field() }}

    <div class="input-field">
      <input type="text" name="newMaterna" value="{{ $expresion->materna }}" class="validate" required>
      <label for="newMaterna">Nueva traducción</label>
    </div>

    <div class="input-field">
      <input type="text" name="newExpresion" value="{{ $expresion->expresion }}" class="validate" required>
      <label for="newExpresion">Nueva expresión</label>
    </div>

    <div class="input-field">
      <select name="newCategoria">
        @foreach($categorias as $x)
          @if($expresion->categoria_id == $x->id)
            <option value="{{$x->id}}" selected>{{$x->categoria}}</option>
          @else
            <option value="{{$x->id}}">{{ $x->categoria }}</option>
          @endif
        @endforeach
      </select>
      <label for="newCategoria">Categoría</label>
    </div>

    <div class="input-field">
      <select name="newIdioma">
        @foreach($idiomas as $y)
          @if($expresion->idioma_id == $y->id)
            <option value="{{$y->id}}" selected>{{$y->idioma}}</option>
          @else
            <option value="{{$y->id}}">{{ $y->idioma }}</option>
          @endif
        @endforeach
      </select>
      <label for="newIdioma">Idioma</label>
    </div>

    <input type="submit" value="Modificar" class="btn blue darken-2">
  </form>
</div>
@endsection
