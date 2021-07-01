<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CocktailCategoriesController extends Controller
{
  public function index(){

    return view('admin/cocktail-categories/all');
  }
  public function create(){
    return view('admin/cocktail-categories/create');
  }
  public function edit(){
    return view('admin/cocktail-categories/edit');
  }
}
