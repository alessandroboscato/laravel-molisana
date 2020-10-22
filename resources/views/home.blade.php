@extends('layouts.main')

  @section('title')
    La Molisana - Sito Ufficiale
  @endsection

  @section('mainContent')
    <!-- corpo -->
    <main class="main">
      <div class="container">
        @if (!empty($paste))
          @foreach ($paste as $key => $tipopasta)
              <h2>{{$key}}</h2>
              <ul class="container-box">
                @foreach ($tipopasta as $prodotto)
                  <li>
                    <div class="overlay">
                      <div class="overlay-text">
                        <h3><a href="prodotti/show/{{$prodotto["id"]}}">{{$prodotto["titolo"]}}</a></h3>
                        <a><img src="{{asset('images/icon.svg')}}" alt="Icon"></a>
                      </div>
                    </div>
                    <img src="{{$prodotto["src"]}}" alt="">
                  </li>
                @endforeach
              </ul>
          @endforeach
        @endif
      </div>
    </main>
    <!-- corpo -->
  @endsection
