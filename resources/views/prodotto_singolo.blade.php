@extends('layouts.main')

@section('title')
  {{$data["titolo"]}}
@endsection

@section('mainContent')
  <main>
    <div class="container">
      <h1>{{$data["titolo"]}}</h1>
      <img src="{{$data["src-h"]}}" alt="Pasta picture">
      <div class="slider">
        <img src="{{$data["src-p"]}}" alt="Pasta picture">
        @if ($id > 0)
          <a class="left" href="{{route("dettaglio-prodotto", $id - 1)}}"><i class="fas fa-angle-left"></i></a>
        @endif
        @if ($id < 11)
          <a class="right"href="{{route("dettaglio-prodotto", $id + 1)}}"><i class="fas fa-angle-right"></i></a>
        @endif
      </div>
      <p class="product">{!!$data["descrizione"]!!}</p>
    </div>
  </main>

@endsection
