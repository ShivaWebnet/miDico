@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/categorias/create" method="post">
    {{ csrf_field() }}

    <div class="input-field">
      <i class="material-icons prefix">view_list</i>
      <input type="text" name="categoria" class="validate" required>
      <label for="categoria">Categoria nueva</label>
    </div>

    <input type="submit" value="Añadir" class="waves-effect waves-light btn blue darken-2">
  </form>
</div>
@endsection
