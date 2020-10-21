@extends('layouts.main')

@section('mainContent')
  <main class="main">
    <div class="container">
      <h1>{{$data["titolo"]}}</h1>
      <img src="{{$data["src-h"]}}" alt="">
      <img src="{{$data["src-p"]}}" alt="">
      <p>{!!$data["descrizione"]!!}</p>
    </div>
  </main>

@endsection
