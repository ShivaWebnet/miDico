@extends('layouts.app')

@section('content')
  <form action="/categorias/mod/{{ $categoria->id }}" method="post">
    {{ csrf_field() }}
    <!-- hidden token -->
    <label for="categoria">Renombra tu categoria: </label>
    <input type="text" name="categoria" value="{{ $categoria->categoria }}">

    <input type="submit" value="Modificar">
  </form>
@endsection
