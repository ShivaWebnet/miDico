@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/diccionario/create" method="post">
    {{ csrf_field() }}

    <div class="input-field">
      <input type="text" name="materna" class="validate" required>
      <label for="materna">Expresión materna</label>
    </div>

    <div class="input-field">
      <input type="text" name="expresion" class="validate" required>
      <label for="expresion">Expresión extranjera</label>
    </div>

    <div class="input-field">
      <select name="idioma" required>
        <option value="" disabled selected>Selecciona idioma</option>
        @foreach($idiomas as $x)
          <option value="{{ $x->id }}">{{ $x->idioma }}</option>
        @endforeach
      </select>
    </div>

    <div class="input-field">
      <select name="categoria" required>
        <option value="" disabled selected>Selecciona categoría</option>
        @foreach($categorias as $y)
          <option value="{{ $y->id }}">{{ $y->categoria }}</option>
        @endforeach
      </select>
    </div>

    <input type="submit" value="Añadir" class="waves-effect waves-light btn blue darken-2">
  </form>
</div>
@endsection
