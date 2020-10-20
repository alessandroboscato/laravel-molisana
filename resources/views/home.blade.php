@extends('layouts.main')
@php
$data = config('pasta');

  $lunga = [];
  $corta = [];
  $cortissima = [];

  foreach($data as $product) {
    if($product["tipo"] == "lunga") {
      $lunga[] = $product;
    } elseif($product["tipo"] == "corta") {
      $corta[] = $product;
    } elseif($product["tipo"] == "cortissima") {
      $cortissima[] = $product;
    }
  }
  @endphp

  @section('title')
    La Molisana - Sito Ufficiale
  @endsection

  @section('mainContent')
    <!-- corpo -->
    <main class="main">
      <div class="container">
        <h2>Le lunghe</h2>
        <ul class="container-box">
          @foreach ($lunga as $product)
            <li>
              <img src="{{$product["src"]}}" alt="">
            </li>
          @endforeach
        </ul>
        <h2>Le corte</h2>
        <ul class="container-box">
          @foreach ($corta as $product)
            <li>
              <img src="{{$product["src"]}}" alt="">
            </li>
          @endforeach
        </ul>
        <h2>Le cortissime</h2>
        <ul class="container-box">
          @foreach ($cortissima as $product)
            <li>
              <img src="{{$product["src"]}}" alt="">
            </li>
          @endforeach
        </ul>
      </div>
    </main>
    <!-- corpo -->
  @endsection
