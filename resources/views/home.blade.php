@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="section">
      <h3>Bienvenido, Wellcome, Benvenuto, Bienvenue a miDico</h3>
      <p>Mantén organizado tu material de aprendizaje para los idiomas que quieras</p>
    </div>
    <div class="divider"></div>
    <div class="section">
      <h4>¿Con qué quieres empezar?</h4>
      <div class="col s12 m4 hoverable flow-text center">
        <i class="teal-text large material-icons">language</i><br>
        Añade un nuevo idioma <br>
        <a href="{{ url('idiomas/add') }}"><i class="small material-icons">add</i></a>
      </div>
      <div class="col s12 m4 hoverable flow-text center">
        <i class="teal-text large material-icons">view_list</i><br>
        Añade una nueva categoría <br>
        <a href="{{ url('categorias/add') }}"><i class="small material-icons">add</i></a>
      </div>
      <div class="col s12 m4 hoverable flow-text center">
        <i class="teal-text large material-icons">comment</i><br>
        Añade una nueva expresión <br>
        <a href="{{ url('diccionario/add') }}"><i class="small material-icons">add</i></a>
      </div>
    </div>
  </div>
</div>
@endsection
