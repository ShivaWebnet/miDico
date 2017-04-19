<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Mi propio style -->
  <link rel="stylesheet" href="/css/master.css">
  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ]) !!};
  </script>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="{{ url('/') }}" class="brand-logo">
        {{ config('app.name', 'Laravel') }}
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"></a>
      <ul class="right hide-on-med-and-down">
        @if (Auth::guest())
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registrar</a></li>
        @else
          <li><a href="{{ url('diccionario') }}">Diccionario</a></li>
          <li><a href="{{ url('idiomas') }}">Idiomas</a></li>
          <li><a href="{{ url('categorias') }}">Categorías</a></li>
          <!-- logout -->
          <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                Salir
            </a>

            <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none">
              {{ csrf_field() }}
            </form>
          </li>
          <!-- end logout -->
        @endif
      </ul>
    </div>
  </nav>


  @yield('content')

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('select').material_select();
    });
  </script>
</body>
</html>
