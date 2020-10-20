
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
  </head>
  <body>
    <!-- intestazione -->
    <header class="header">
      <div class="header-logo">
        <img src="{{asset('images/logo.png')}}" alt="Logo Molisana">
      </div>
      <nav class="header-menu">
        <ul class="header-menu-nav">
          <li><a href="{{route("home")}}">Home</a></li>
          <li><a class="active" href="{{route("products")}}">Prodotti</a></li>
          <li><a href="{{route("news")}}">News</a></li>
        </ul>
      </nav>
    </header>
    <!--/intestazione -->
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
    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-column">
          <div class="footer-column-logo">
            <img src="{{asset('images/logo.png')}}" alt="Logo Molisana">
          </div>
          <ul>
            <li>Ragione sociale: La Molisana S.P.A.</li>
            <li>Sede legale: Contrada Colle delle Api, 100/A - 86100 - Campobasso (CB)</li>
            <li>Pec: lamolisana@pec.it</li>
            <li>Tel: +39 0874 4981</li>
            <li>Fax: +39 0874 629584</li>
            <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
            <li>commerciale@lamolisana.it</li>
            <li>export@lamolisana.it</li>
            <li>numero verde 800818081</li>
            <li>telefono 3801292455</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Pastificio</h3>
          <ul>
            <li>Il Pastificio</li>
            <li>Grano decorticato a pietra</li>
            <li>Il Molise c'è</li>
            <li>Filiera Integrata</li>
            <li>100 anni di pasta</li>
            <li>Sartoria della pasta</li>
            <li>Spaghetto Quadrato</li>
            <li>Le Persone</li>
          </ul>
          <h3>Prodotti</h3>
          <ul>
            <li>Le Classiche</li>
            <li>Le Integrali</li>
            <li>Le speciali</li>
            <li>Le Biologiche</li>
            <li>Le Gluten-Free</li>
            <li>Le Semole</li>
            <li>LE Extra di Lusso</li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Collezione da chef</h3>
          <ul>
            <li>Collezione da Chef</li>
            <li>Grandi Cucine</li>
            <li>Biologiche</li>
            <li>Quadrate</li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- footer -->
  </body>
</html>
