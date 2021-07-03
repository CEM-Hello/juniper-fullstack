<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocktailItem extends Model
{
  protected $table = 'cocktail_items';

  protected $fillable = [
      'title', 'description', 'image_url', 'price', 'category_id'
  ];

  public function categories(){
      return $this->belongsTo('App\Models\CocktailCategory');
  }
}
