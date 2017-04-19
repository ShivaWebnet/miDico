@extends('layouts.app')

@section('content')
  <h3>Página no encontrada :(</h3>
  <h2>{{ $exception->getMessage() }}</h2>
@endsection
