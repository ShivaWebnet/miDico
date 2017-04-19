@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/idiomas/mod/{{ $idioma->id }}" method="post">
    {{ csrf_field() }}
    <!-- hidden token -->

    <div class="input-field">
      <input type="text" name="idioma" value="{{ $idioma->idioma }}" class="validate" required>
      <label for="Idioma">Renombra tu idioma</label>
    </div>

    <input type="submit" value="Modificar" class="btn blue darken-2">
  </form>
</div>
@endsection
