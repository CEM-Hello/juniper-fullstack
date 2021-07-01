<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
  public function home() {
    return view('home');
}

public function about() {
  return view('pages.about');
}

public function products() {
  return view('pages.products');
}

public function tastingRoom() {

    return view('cocktail-menu.index');
}

public function cocktailMenu() {
    return view('cocktail-menu.cocktail-menu');
}

public function restaurant() {

    return view('food-menu.index');
}

public function foodMenu() {

    return view('food-menu.food-menu');
}

public function reservations() {
    return view('pages.reservations');
}

public function events() {
    return view('pages.events');
}

public function barrelClub() {
    return view('pages.barrel-club');
}

public function barrelNews() {
    return view('pages.barrel-news');
}

public function contact() {
    return view('pages.contact');
}
}
