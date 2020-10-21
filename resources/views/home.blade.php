@extends('layouts.main')
@php
$data = config('pasta');
  $lunga = [];
  $corta = [];
  $cortissima = [];

  foreach($data as $key => $product) {
    $product["id"] = $key;
    if($product["tipo"] == "lunga") {
      $lunga[] = $product;
    } elseif($product["tipo"] == "corta") {
      $corta[] = $product;
    } elseif($product["tipo"] == "cortissima") {
      $cortissima[] = $product;
    }
  }
  // dd($data);
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
              <div class="overlay">
                <h3><a href="prodotti/show/{{$product["id"]}}">{{$product["titolo"]}}</a></h3>
                <a><img src="{{asset('images/icon.svg')}}" alt="Icon"></a>
              </div>
              <img src="{{$product["src"]}}" alt="">
            </li>
          @endforeach
        </ul>
        <h2>Le corte</h2>
        <ul class="container-box">
          @foreach ($corta as $product)
            <li>
              <div class="overlay">
                <h3><a href="prodotti/show/{{$product["id"]}}">{{$product["titolo"]}}</a></h3>
                <a><img src="{{asset('images/icon.svg')}}" alt="Icon"></a>
              </div>
              <img src="{{$product["src"]}}" alt="">
            </li>
          @endforeach
        </ul>
        <h2>Le cortissime</h2>
        <ul class="container-box">
          @foreach ($cortissima as $product)
            <li>
              <div class="overlay">
                <h3><a href="prodotti/show/{{$product["id"]}}">{{$product["titolo"]}}</a></h3>
                <a><img src="{{asset('images/icon.svg')}}" alt="Icon"></a>
              </div>
              <img src="{{$product["src"]}}" alt="">
            </li>
          @endforeach
        </ul>
      </div>
    </main>
    <!-- corpo -->
  @endsection
