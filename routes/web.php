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

Route::get('/about', function () {
  return view('pages.about');
});

Route::get('/products', function () {
  return view('pages.products');
});

Route::get('/tasting-room', function () {
  return view('cocktail-menu.index');
});

Route::get('/cocktail-menu', function () {
  return view('cocktail-menu.cocktail-menu');
});

Route::get('/restaurant', function () {
  return view('food-menu.index');
});

Route::get('/food-menu', function () {
  return view('food-menu.food-menu');
});

Route::get('/reservations', function () {
  return view('pages.reservations');
});

Route::get('/events', function () {
  return view('pages.events');
});

Route::get('/barrel-club', function () {
  return view('pages.barrel-club');
});

Route::get('/barrel-news', function () {
  return view('pages.barrel-news');
});

Route::get('/contact', function () {
  return view('pages.contact');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
