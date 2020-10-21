@extends('layouts.main')

@section('title')
  {{$data["titolo"]}}
@endsection

@section('mainContent')
  <main>
    <div class="container">
      <h1 class="text-center">{{$data["titolo"]}}</h1>
      <img src="{{$data["src-h"]}}" alt="">
      <img src="{{$data["src-p"]}}" alt="">
      <p class="product">{!!$data["descrizione"]!!}</p>
    </div>
  </main>

@endsection
