@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/idiomas/create" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="input-field">
      <i class="material-icons prefix">language</i>
      <input type="text" name="idioma" class="validate" required>
      <label for="idioma">Idioma nuevo</label>
    </div>

    <input type="submit" value="Añadir" class="waves-effect waves-light btn blue darken-2">
  </form>
</div>
@endsection
