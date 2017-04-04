@extends('layouts.app')

@section('content')
  <form action="/diccionario/create" method="post">
    {{ csrf_field() }}

    <label for="materna">Expresión materna</label>
    <input type="text" name="materna"><br>

    <label for="expresion">Expresión extranjera</label>
    <input type="text" name="expresion"><br>

    <label for="idioma">Guardar en el idioma:</label>
    <select name="idioma">
      @foreach($idiomas as $x)
        <option value="{{ $x->id }}">{{ $x->idioma }}</option>
      @endforeach
    </select><br>

    <label for="categoria">Guardar en categoría:</label>
    <select name="categoria">
      @foreach($categorias as $y)
        <option value="{{ $y->id }}">{{ $y->categoria }}</option>
      @endforeach
    </select><br>

    <input type="submit" value="Añadir">
  </form>
@endsection
