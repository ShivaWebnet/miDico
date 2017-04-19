@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/categorias/mod/{{ $categoria->id }}" method="post">
    {{ csrf_field() }}
    <!-- hidden token -->

    <div class="input-field">
      <input type="text" name="categoria" value="{{ $categoria->categoria }}" class="validate" required>
      <label for="categoria">Renombra tu categoria: </label>
    </div>

    <input type="submit" value="Modificar" class="btn blue darken-2">
  </form>
</div>
@endsection
