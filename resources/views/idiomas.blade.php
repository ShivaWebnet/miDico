@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <ul>
          @foreach($idiomas as $key)
            <li>{{ $key->idioma }}</li>
          @endforeach
          </ul>
        </div>
    </div>
</div>
@endsection
