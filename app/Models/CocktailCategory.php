<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailCategory extends Model
{
  protected $table = 'cocktail_categories';

  protected $fillable = [
      'title', 'image_url'
  ];
  
  public function cocktail_items(){
      return $this->hasMany('App\Models\CocktailItem', 'category_id');
  }
}
