@extends('layouts.app')

@section('content')
  <form action="/idiomas/mod/{{ $idioma->id }}" method="post">
    {{ csrf_field() }}
    <!-- hidden token -->
    <label for="Idioma">Renombra tu idioma: </label>
    <input type="text" name="idioma" value="{{ $idioma->idioma }}">

    <input type="submit" value="Modificar">
  </form>
@endsection
