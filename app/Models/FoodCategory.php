<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
  protected $table = 'food_categories';

  protected $fillable = [
      'title', 'image_url'
  ];
  
  public function food_items(){
      return $this->hasMany('App\Models\FoodItem', 'category_id');
  }
}
