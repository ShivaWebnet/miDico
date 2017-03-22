@extends('layouts.app')

@section('content')
  <form action="/idiomas/create" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <label for="Idioma">Idioma nuevo: </label>
    <input type="text" name="idioma">

    <input type="submit" value="Añadir">
  </form>
@endsection
