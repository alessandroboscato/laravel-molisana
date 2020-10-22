<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
  $data = config('pasta');
  $paste = [];

    foreach($data as $key => $product) {
      $product["id"] = $key;
      $paste[$product["tipo"]][] = $product;
    }
  return view('home', ['paste' => $paste]);
})->name("home");

Route::get('/prodotti', function () {
    return redirect('/home');
})->name("products");

Route::get('/news', function () {
  return view('news');
})->name("news");

Route::get('/prodotti/show/{id}', function ($id) {
  $prodotto = config("pasta.$id");
  return view('prodotto_singolo', ['data' => $prodotto]);
});
