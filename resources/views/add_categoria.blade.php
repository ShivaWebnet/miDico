@extends('layouts.app')

@section('content')
  <form action="/categorias/create" method="post">
    {{ csrf_field() }}

    <label for="Idioma">Categoria nueva: </label>
    <input type="text" name="categoria">

    <input type="submit" value="Añadir">
  </form>
@endsection
