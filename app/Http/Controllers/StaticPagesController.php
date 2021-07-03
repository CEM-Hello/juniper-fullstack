<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\FoodItem;
use App\Models\Reservation;
use App\Models\CocktailItem;
use App\Models\FoodCategory;
use Illuminate\Http\Request;
use App\Models\CocktailCategory;

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
  $categories = CocktailCategory::all();
    return view('cocktail-menu.index', [
      'categories' => $categories
  ]);
}

public function cocktailMenu($slug) {
  $cocktailCategory = CocktailCategory::where('title', '=', $slug)->first();
  $cocktailItems = CocktailItem::where('category_id', '=', $cocktailCategory->id)->get();
  return view('cocktail-menu/cocktail-menu', [
      "cocktailItem" => ucfirst($slug),
      "cocktailItems" => $cocktailItems
  ]);
}

public function restaurant() {
  $categories = FoodCategory::all();
    return view('food-menu.index', [
      'categories' => $categories
  ]);
}

public function foodMenu($slug) {
  $foodCategory = FoodCategory::where('title', '=', $slug)->first();
  $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get();

  return view('food-menu/food-menu', [
      "foodItem" => ucfirst($slug),
      "foodItems" => $foodItems
  ]);
}

public function reservations() {
    return view('pages.reservations');
}

public function saveReservation(){
  request()->validate([
      'fname' => ['required', 'string'],
      'lname' => ['required', 'string'],
      'email' => ['required', 'string'],
      'phone_number' => ['required', 'string'],
      'date' => ['required', 'string'],
      'time' => ['required', 'string'],
      'guests_total' => ['required', 'string'],
      'seating' => ['string']
  ]);
  $reservation = new Reservation();
  $reservation->fname = request('fname');
  $reservation->lname = request('lname');
  $reservation->email = request('email');
  $reservation->phone_number = request('phone_number');
  $reservation->date = request('date');
  $reservation->time = request('time');
  $reservation->guests_total = request('guests_total');
  $reservation->seating = request('seating');
  $reservation->save();

 
  return redirect('/');
}

public function events() {
    return view('pages.events');
}

public function barrelClub() {
    return view('pages.barrel-club');
}

public function registerMember(){
  request()->validate([
      'fname' => ['required', 'string'],
      'lname' => ['required', 'string'],
      'email' => ['required', 'string'],
      'phone_number' => ['required', 'string']
  ]);
  $member = new Member();
  $member->fname = request('fname');
  $member->lname = request('lname');
  $member->email = request('email');
  $member->phone_number = request('phone_number');
  $member->save();

 
  return redirect('/barrel-club');
}

public function barrelNews() {
    return view('pages.barrel-news');
}

public function contact() {
    return view('pages.contact');
}
}
