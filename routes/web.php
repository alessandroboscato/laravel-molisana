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
  return view('home', $paste);
})->name("home");

Route::get('/prodotti', function () {
  $data = config('pasta');
  $paste = [];

    foreach($data as $key => $product) {
      $product["id"] = $key;
      $paste[$product["tipo"]][] = $product;
    }

  return view('prodotti', $paste);
})->name("products");

Route::get('/news', function () {
  return view('news');
})->name("news");

// Route::get('/prodotto/show/{id}', function ($id) {
//   return view('news');
// })->name("news");
