<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'pub food',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'brunch',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
