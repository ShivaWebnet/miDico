@extends('layouts.app')

@section('content')
  <form action="/diccionario/mod/{{ $expresion->id }}" method="post">
    {{ csrf_field() }}

    <label for="newMaterna">Nueva traducción</label>
    <input type="text" name="newMaterna" value="{{ $expresion->materna }}"><br>

    <label for="newExpresion">Nueva expresión</label>
    <input type="text" name="newExpresion" value="{{ $expresion->expresion}} "><br>

    <label for="newCategoria">Categoría</label>
    <select name="newCategoria">
      @foreach($categorias as $x)
        @if($expresion->categoria_id == $x->id)
          <option value="{{$x->id}}" selected>{{$x->categoria}}</option>
        @else
          <option value="{{$x->id}}">{{ $x->categoria }}</option>
        @endif
      @endforeach
    </select><br>

    <label for="newIdioma">Idioma</label>
    <select name="newIdioma">
      @foreach($idiomas as $y)
        @if($expresion->idioma_id == $y->id)
          <option value="{{$y->id}}" selected>{{$y->idioma}}</option>
        @else
          <option value="{{$y->id}}">{{ $y->idioma }}</option>
        @endif
      @endforeach
    </select><br>

    <input type="submit" value="Modificar">
  </form>
@endsection
