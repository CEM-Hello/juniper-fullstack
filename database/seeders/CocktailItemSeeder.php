<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CocktailItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail_items')->insert([
            'title' => 'Gin & Juice',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('cocktail_items')->insert([
            'title' => 'Gin Fruit',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
