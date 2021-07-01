<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CocktailItemsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){

    return view('admin/cocktail-items/all');
}
public function create(){
    return view('admin/cocktail-items/create');
}

public function edit(){
    
    return view('admin/cocktail-items/edit');
}

}
